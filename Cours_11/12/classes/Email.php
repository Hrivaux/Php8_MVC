<?php

class Email
{
    public function __construct(
        private string $email
    ) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            throw new InvalidArgumentException("Email incorrecte");
        }
    }
}
