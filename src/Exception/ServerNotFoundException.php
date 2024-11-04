<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Exception;

final class ServerNotFoundException extends AbstractRequestException
{
    public function __construct(mixed $data = null)
    {
        parent::__construct(
            errorCode: -32099,
            errorMessage: 'Server not found',
            errorData: $data,
        );
    }
}
