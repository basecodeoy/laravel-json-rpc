<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Mixin;

use BaseCodeOy\JsonRpc\Http\Controller\ProcedureController;
use BaseCodeOy\JsonRpc\Server\ServerInterface;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

final class RouteMixin
{
    public function jsonRpc(): Closure
    {
        /**
         * @param class-string<ServerInterface> $server
         */
        return function (string $server): void {
            /** @var ServerInterface $server */
            $server = App::make($server);

            Route::post($server->getRoutePath(), ProcedureController::class)
                ->name($server->getRouteName())
                ->middleware($server->getMiddleware());
        };
    }
}
