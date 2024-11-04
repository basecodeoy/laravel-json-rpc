<?php

declare(strict_types=1);

namespace BaseCodeOy\JsonRpc\Http\Controller;

use BaseCodeOy\JsonRpc\Request\RequestHandlerInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

final class ProcedureController extends Controller
{
    public function __invoke(Request $request, RequestHandlerInterface $requestHandler): JsonResponse
    {
        return Response::json($requestHandler->handle($request));
    }
}
