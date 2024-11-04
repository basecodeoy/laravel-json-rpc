<?php

declare(strict_types=1);

namespace Tests\JsonRpc\Procedure;

use BaseCodeOy\JsonRpc\Procedure\AbstractProcedure;

final class GetData extends AbstractProcedure
{
    public function handle(): array
    {
        return ['hello', 5];
    }
}
