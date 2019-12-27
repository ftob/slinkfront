<?php


namespace Slinkfront\Components\Client\Contracts;


use Psr\Http\Message\UriInterface;
use Slinkfront\Components\Client\Rpc\Options;
use Slinkfront\Components\Client\Rpc\Response;

/**
 * Interface ClientInterface
 * @package Slinkfront\Components\Client\Contracts
 */
interface ClientInterface
{
    /**
     * @param UriInterface $address
     * @param Options $options
     * return link id
     * @return string
     */
    public function send(UriInterface $address, Options $options):Response;
}
