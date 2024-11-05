<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Request;

interface RequestValidatorInterface
{
    public function validate(mixed $data): void;
}
