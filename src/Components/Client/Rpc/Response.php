<?php
namespace Slinkfront\Components\Client\Rpc;

/**
 * Class Response
 * @package Slinkfront\Components\Client\Rpc
 */
class Response
{
    const ERROR_PARSE = -32700;
    const ERROR_INVALID_REQUEST = -32600;
    const ERROR_METHOD_NOT_FOUND = -32601;
    const ERROR_INVALID_PARAMS = -32602;
    const ERROR_INTERNAL_ERROR = -32603;

    protected string $jsonrpc;

    protected string $id;

    protected string $result;

    protected ResponseError $error;

    public function isError():bool
    {
        return $this->error->getCode() < 0;
    }

}
