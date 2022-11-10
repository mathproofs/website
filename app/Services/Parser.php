<?php

namespace App\Services;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\FrontMatter\FrontMatterExtension;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\MarkdownConverter;

class Parser
{
    public static function parse(string $markdown): array
    {
        $environment = new Environment();
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new FrontMatterExtension());
        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        $converter = new MarkdownConverter($environment);
        $result = $converter->convert($markdown); /** @var RenderedContentWithFrontMatter $result */
        $metadata = $result->getFrontMatter();

        $body = str_replace("\n", '', $result->getContent());

        return [
            'title' => $metadata['title'],
            'description' => $metadata['description'] ?? null,
            'category' => $metadata['category'] ?? null,
            'foundations' => $metadata['foundations'] ?? [],
            'body' => $body,
        ];
    }
}
