<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Server;

use BaseCodeOy\JsonRpc\Http\Middleware\BootServer;
use BaseCodeOy\JsonRpc\Procedure\ProcedureRepository;

abstract class AbstractServer implements ServerInterface
{
    private readonly ProcedureRepository $procedureRepository;

    public function __construct()
    {
        $this->procedureRepository = new ProcedureRepository($this->procedures());
    }

    public function getRoutePath(): string
    {
        return '/';
    }

    public function getRouteName(): string
    {
        return 'json-rpc.v1';
    }

    public function getVersion(): string
    {
        return '1.0.0';
    }

    public function getMiddleware(): array
    {
        return [
            BootServer::class,
        ];
    }

    public function getProcedureRepository(): ProcedureRepository
    {
        return $this->procedureRepository;
    }

    abstract protected function procedures();
}
