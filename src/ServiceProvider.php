<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc;

use BaseCodeOy\JsonRpc\Mixin\RouteMixin;
use BaseCodeOy\JsonRpc\Request\RequestHandler;
use BaseCodeOy\JsonRpc\Request\RequestParser;
use BaseCodeOy\JsonRpc\Request\RequestValidator;
use BaseCodeOy\JsonRpc\Server\ServerRepository;
use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $this->app->singleton(
            ServerRepository::class,
            fn (Application $app) => new ServerRepository($app->config->get('json-rpc.servers')),
        );

        RPC::resolveRequestParserUsing(RequestParser::class);
        RPC::resolveRequestValidatorUsing(RequestValidator::class);
        RPC::resolveRequestHandlerUsing(RequestHandler::class);
    }

    public function packageBooted(): void
    {
        Route::mixin(new RouteMixin());
    }
}
