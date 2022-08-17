<?php

namespace App\Console\Commands;

use App\Models\Proof;
use App\Services\Parser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ParseProofsCommand extends Command
{
    protected $signature = 'app:parse-proofs';

    protected $description = 'Command description';

    public function handle(): int
    {
        Proof::truncate();

        $files = Storage::files('proofs');
        $this->comment('Generating ' . count($files) . ' proofs...');
        $this->newLine();

        $this->withProgressBar($files, function (string $filename) {
            $this->parseProof($filename);
        });

        $this->newLine(2);
        $this->info('Generated ' . count($files) . ' proof!');
        return 0;
    }

    protected function parseProof(string $filename): void
    {
        $slug = str($filename)->ltrim('proofs/')->rtrim('.md');

        $contents = Storage::get($filename);
        $data = Parser::parse($contents);

        Proof::create([
            'title' => $data['title'],
            'slug' => $slug,
            'body' => $data['body'],
        ]);
    }
}
