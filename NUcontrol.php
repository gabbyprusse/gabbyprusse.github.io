<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');

function input_empty(string $user, string $pwd, $goal) {
    if (empty($user) || empty($pwd) || empty($goal)) {
        return true;
    } else {
        return false;
    }
}

function used_username(object $pdo, string $user) {
    if (getUsername($pdo, $user)) {
        return true;
    } else {
       return false;
    }
}

function createUser(string $user, string $pwd, int $goal) {
    set_user();
}
