<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Exception;

final class InvalidRequestException extends AbstractRequestException
{
    public function __construct(mixed $data = null)
    {
        parent::__construct(
            errorCode: -32600,
            errorMessage: 'Invalid Request',
            errorData: $data,
        );
    }
}
