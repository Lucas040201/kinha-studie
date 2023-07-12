<?php
namespace Core\Domain\DomainExceptions\User;

class ShortNameOrSurnameException extends \Exception {
    public function __construct(string $message = "", int $code = 400, ?Throwable $previous = null)
    {
        $message = "The first and last name fields must have at least 2 characters";
        parent::__construct($message, $code, $previous);
    }
}
