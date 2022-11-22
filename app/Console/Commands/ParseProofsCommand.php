<?php

namespace App\Console\Commands;

use App\Models\Proof;
use App\Services\Parser;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ParseProofsCommand extends Command
{
    protected $signature = 'parse {--W|watch}';

    protected $description = 'Parse all proofs';

    public function handle(): int
    {
        if (!$this->option('watch')) {
            $this->do();
            return 0;
        }

        while (true) {
            $this->do(false);
            sleep(1);
        }
    }

    /**
     * This program isn't very efficient, but it does not
     * really matter since this program is only run once
     * by the artisan command, not for every page request.
     */
    public function do($output = true)
    {
        Proof::truncate();
        DB::table('foundation_implication')->truncate();
        if ($output) {
            $this->info('Deleted all proofs!');
        }
        $this->newLine();

        $files = Storage::files('proofs');
        if ($output) {
            $this->comment('Generating ' . count($files) . ' proofs...');
        }

        $foundations = new Collection();

        $this->withProgressBar($files, function (string $filename) use ($foundations) {
            [$slug, $foundationsList] = $this->parseProofAndReturnFoundations($filename);
            $foundations->put((string) $slug, $foundationsList);
        });

        if ($output) {
            $this->newLine();
            $this->info('Generated ' . count($files) . ' proof!');

            $this->newLine();
            $this->comment('Parsing foundations structure...');
        }

        $foundations->filter()->each(function ($foundationsList, $implicationSlug) {
            $implication = Proof::where('slug', $implicationSlug)->first();

            foreach ($foundationsList as $foundationSlug) {
                $foundation = Proof::where('slug', $foundationSlug)->first();
                $implication->foundations()->attach($foundation);
            }
        });

        if ($output) {
            $this->info('Parsed foundations structure!');
        }
    }

    protected function parseProofAndReturnFoundations(string $filename): array
    {
        $slug = str($filename)->replaceMatches('/^proofs\//', '')->replaceMatches('/\.md$/', '');

        $contents = Storage::get($filename);
        $data = Parser::parse($contents);

        Proof::create([
            'title' => $data['title'],
            'slug' => $slug,
            'description' => $data['description'],
            'category' => $data['category'],
            'wip' => $data['wip'],
            'body' => $data['body'],
        ]);

        return [$slug, $data['foundations']];
    }
}
