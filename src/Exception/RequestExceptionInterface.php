<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Exception;

use BaseCodeOy\JsonRpc\Model\Error;

interface RequestExceptionInterface
{
    public function toError(): Error;

    public function toArray(): array;
}
