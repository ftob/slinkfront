<?php
namespace Slinkfront\Components\Client\Rpc;

use Phalcon\Collection;

/**
 * Class Options
 * @package Slinkfront\Components\Client\Rpc
 */
class Options
{
    /**
     * @var string
     */
    protected string $requestId;

    /**
     * @var string
     */
    protected string $userId;

    /**
     * Options constructor.
     * @param string $requestId
     * @param string $userId
     */
    public function __construct(string $requestId, string $userId)
    {

        $this->requestId = $requestId;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getRequestID():string
    {
        return $this->requestId;
    }

    /**
     * @return string
     */
    public function getUserId():string
    {
        return $this->userId;
    }

}
