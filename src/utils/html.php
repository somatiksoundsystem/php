<?php
declare(strict_types=1);
/**
 * @param $var
 * @param string $value
 * @return string
 */
function mark(&$var, string $value = 'form__item--invalid'): string
{
    return mark_if_true(isset($var), $value);
}

/**
 * @param bool $condition
 * @param string $value
 * @return string
 */
function mark_if_true(bool $condition, string $value = 'form__item--invalid'): string
{
    return $condition ? $value : '';
}

/**
 * Writes value if set with sanitizing, or empty string otherwise
 * @param $value
 * @return string
 */
function h($value): string
{
    return isset($value) ? htmlspecialchars($value, ENT_QUOTES) : '';
}

/**
 * Prints date from utc
 * @param $value
 * @return string
 */
function release_date($value): string
{
    $date = strtotime($value);
    return date('d.m.Y',$date);
}
