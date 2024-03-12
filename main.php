<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$input = $argv[1] ?? exit(sprintf('invalid argument'));
try {
    $email = Email::fromString($input);
} catch (InvalidArgumentException) {
    exit(sprintf('"%s" is not a valid email', $input));
}
exit(sprintf('"%s" is a valid email', $input));
