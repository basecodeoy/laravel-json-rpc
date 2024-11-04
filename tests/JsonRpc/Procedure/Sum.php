<?php

declare(strict_types=1);

namespace Tests\JsonRpc\Procedure;

use BaseCodeOy\JsonRpc\Model\RequestObject;
use BaseCodeOy\JsonRpc\Procedure\AbstractProcedure;

final class Sum extends AbstractProcedure
{
    public function handle(RequestObject $requestObject): int
    {
        return \array_sum($requestObject->getParams());
    }
}
