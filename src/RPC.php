<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc;

use BaseCodeOy\JsonRpc\Request\RequestHandlerInterface;
use BaseCodeOy\JsonRpc\Request\RequestParserInterface;
use BaseCodeOy\JsonRpc\Request\RequestValidatorInterface;
use Illuminate\Support\Facades\App;

final class RPC
{
    public static function resolveRequestParserUsing(string $class): void
    {
        App::singleton(RequestParserInterface::class, $class);
    }

    public static function resolveRequestValidatorUsing(string $class): void
    {
        App::singleton(RequestValidatorInterface::class, $class);
    }

    public static function resolveRequestHandlerUsing(string $class): void
    {
        App::singleton(RequestHandlerInterface::class, $class);
    }
}
