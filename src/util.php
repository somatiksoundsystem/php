<?php

/**
 * @param string $template
 * @param array $data
 */
$render = function (string $template, ?array $data) use ($twig, $log): void {
    try {
        echo $twig->render($template, $data);
    } catch (\Twig\Error\Error $e) {
        $log->addRecord(Monolog\Logger::ERROR, "Failed to load $template" . $e->getMessage());
    }
};
