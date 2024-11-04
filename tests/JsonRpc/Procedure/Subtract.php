<?php

declare(strict_types=1);

namespace Tests\JsonRpc\Procedure;

use BaseCodeOy\JsonRpc\Model\RequestObject;
use BaseCodeOy\JsonRpc\Procedure\AbstractProcedure;

final class Subtract extends AbstractProcedure
{
    public function handle(RequestObject $requestObject): int
    {
        return $requestObject->getParams()[0] - $requestObject->getParams()[1];
    }
}
