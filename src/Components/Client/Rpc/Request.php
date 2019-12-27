<?php
namespace Slinkfront\Components\Client\Rpc;

use Phalcon\Collection;

/**
 * Class RpcRequest
 * @package Slinkfront\Components\Client\Rpc\Methods
 */
class Request
{

    const VERSION_PROTOCOL = "2.0";

    /**
     * @var array
     */
    protected array $ids;

    /**
     * @var string
     */
    protected string $method;

    /**
     * @var Collection
     */
    protected Collection $params;

    /**
     * RpcRequest constructor.
     * @param array $ids
     * @param string $method
     * @param Collection $params
     */
    public function __construct(array $ids, string $method, Collection $params)
    {
        $this->ids = $ids;
        $this->method = $method;
        $this->params = $params;
    }

    public function toJson()
    {
        return json_encode([
            'jsonrpc' => self::VERSION_PROTOCOL,
            'id' => $this->ids,
            'methods' => $this->method,
            'params' => $this->params,
        ]);
    }
}