<?php
declare(strict_types=1);
require_once __DIR__ . '/html.php';

/**
 * @param string $src
 * @param array|null $data
 * @return string
 */
function include_template(string $src, array $data = null): string
{
    if (!file_exists($src)) {
        trigger_error("Template was not found: {$src}", E_USER_ERROR);
    }

    ob_start();
    if ($data) {
        extract($data);
    }
    require($src);

    return ob_get_clean();
}

/**
 * @param string $page
 * @param string $title
 * @param array $content
 */
function render(string $page, string $title, array $content): void
{
    print include_template(__TEMPLATES__ . '/layout.php', [
        'title' => $title,
        'content' => include_template(__TEMPLATES__ . '/' . $page, $content)
    ]);
}
