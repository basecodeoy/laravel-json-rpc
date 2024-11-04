<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Request;

use BaseCodeOy\JsonRpc\Exception\InvalidRequestException;
use BaseCodeOy\JsonRpc\Rule\Identifier;
use Illuminate\Support\Facades\Validator;

final class RequestValidator implements RequestValidatorInterface
{
    public function validate(mixed $data): void
    {
        if (!\is_array($data)) {
            throw new InvalidRequestException();
        }

        $validator = Validator::make(
            $data,
            [
                'jsonrpc' => ['required', 'in:2.0'],
                'method' => ['required', 'string'],
                'params' => ['nullable', 'array'],
                'id' => new Identifier(),
            ],
        );

        if ($validator->fails()) {
            throw new InvalidRequestException($validator->errors()->toArray());
        }
    }
}
