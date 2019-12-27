<?php
namespace Slinkfront\Components\Client\Rpc;

/**
 * Class ResponseError
 * @package Slinkfront\Components\Client\Rpc
 */
class ResponseError
{
    /**
     * @var int
     */
    protected int $code;

    /**
     * @var string
     */
    protected string $message;

    /**
     * ResponseError constructor.
     * @param int $code
     * @param string $message
     */
    public function __construct(int $code, string $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function getCode():int
    {
        return $this->code;
    }

    public function getMessage():string
    {
        return $this->message;
    }
}