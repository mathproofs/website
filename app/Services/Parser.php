<?php

namespace App\Services;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\FrontMatter\FrontMatterExtension;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter;
use League\CommonMark\MarkdownConverter;

class Parser
{
    public static function parse(string $markdown): array
    {
        $environment = new Environment();
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new FrontMatterExtension());

        $converter = new MarkdownConverter($environment);
        $result = $converter->convert($markdown); /** @var RenderedContentWithFrontMatter $result */
        $metadata = $result->getFrontMatter();

        return [
            'title' => $metadata['title'],
            'category' => $metadata['category'] ?? null,
            'body' => str_replace("\n", '', $result->getContent()),
        ];
    }
}
