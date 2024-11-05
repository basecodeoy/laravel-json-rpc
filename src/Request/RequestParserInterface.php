<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Request;

use BaseCodeOy\JsonRpc\Model\Request;

interface RequestParserInterface
{
    public function parse(string $json): Request;
}
