<?php
declare(strict_types=1);

namespace App;

use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\GithubFlavoredMarkdownConverter;

final class Markdown
{
    private CommonMarkConverter $converter;

    /**
     * Call this method to get singleton
     *
     * @return Markdown
     */
    private static function getInstance(): Markdown
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Markdown();
        }
        return $inst;
    }

    /**
     * Private ctor so nobody else can instantiate it
     *
     */
    private function __construct()
    {
        // Create a new, empty environment
        $environment = Environment::createCommonMarkEnvironment();

        // Add this extension
//        $environment->addExtension(new InlinesOnlyExtension());
//        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        $converter = new GithubFlavoredMarkdownConverter([], $environment);

        $this->converter = $converter;
    }

    public static function toHTML(string $input = null): string
    {
        if (!$input) {
            return '';
        }

        $markdown = self::getInstance();

        return $markdown->converter->convertToHtml($input);
    }

}
