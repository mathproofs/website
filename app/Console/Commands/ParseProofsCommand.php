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
    protected $signature = 'app:parse-proofs';

    protected $description = 'Command description';

    /**
     * This program isn't very efficient, but it does not
     * really matter since this program is only run once
     * by the artisan command, not for every page request.
     */
    public function handle(): int
    {
        Proof::truncate();
        DB::table('foundation_implication')->truncate();
        $this->info('Deleted all proofs!');
        $this->newLine();

        $files = Storage::files('proofs');
        $this->comment('Generating ' . count($files) . ' proofs...');

        $foundations = new Collection();

        $this->withProgressBar($files, function (string $filename) use ($foundations) {
            [$slug, $foundationsList] = $this->parseProofAndReturnFoundations($filename);
            $foundations->put((string) $slug, $foundationsList);
        });

        $this->newLine();
        $this->info('Generated ' . count($files) . ' proof!');

        $this->newLine();
        $this->comment('Parsing foundations structure...');

        $foundations->filter()->each(function ($foundationsList, $implicationSlug) {
            $implication = Proof::where('slug', $implicationSlug)->first();

            foreach ($foundationsList as $foundationSlug) {
                $foundation = Proof::where('slug', $foundationSlug)->first();
                $implication->foundations()->attach($foundation);
            }
        });

        $this->info('Parsed foundations structure!');

        return 0;
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
            'body' => $data['body'],
        ]);

        return [$slug, $data['foundations']];
    }
}
