<?php
declare(strict_types=1);

use App\Artist;

const SESSION_CURRENT_USER = 'current_user';

const NOT_FOUND_HTTP_STATUS_CODE = 404;
const UNAUTHORIZED_HTTP_STATUS_CODE = 401;
const FORBIDDEN_HTTP_STATUS_CODE = 403;

session_start();

if (!isset($_SESSION[SESSION_CURRENT_USER])) {
    // if anonymous and page is not allowed for unauthenticated
    if (isset($authorized_only)) {
        http_response_code(UNAUTHORIZED_HTTP_STATUS_CODE);
        die();
    } else {
        $_SESSION[SESSION_CURRENT_USER] = null;
    }
}

function set_session_current_user(Artist $user): void
{
    $_SESSION[SESSION_CURRENT_USER] = $user;
}

function get_session_current_user(): ?Artist
{
    return $_SESSION[SESSION_CURRENT_USER] ?? null;
}

function is_logged_in(): bool
{
    return isset($_SESSION[SESSION_CURRENT_USER]);
}