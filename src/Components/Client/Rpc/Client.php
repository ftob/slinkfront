<?php
namespace Slinkfront\Components\Client\Rpc;

use GuzzleHttp\ClientInterface as PsrClientInterface;
use GuzzleHttp\Psr7\Request as HttpRequest;
use Psr\Http\Message\UriInterface;
use Slinkfront\Components\Client\Contracts\ClientInterface;

class Client implements ClientInterface
{
    protected PsrClientInterface $client;

    protected string $instance;

    /**
     * @todo change to collection requests object
     * @var array []Request
     */
    protected array $requests;

    /**
     * RpcClient constructor.
     * @param PsrClientInterface $client
     * @param string $instance
     */
    public function __construct(PsrClientInterface $client, string $instance)
    {
        $this->client = $client;
        $this->instance = $instance;
    }

    /**
     * @param Request $request
     */
    public function addRequest(Request $request)
    {
        $this->requests[] = $request;
    }

    /**
     * @param UriInterface $address
     * @param Options $options
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(UriInterface $address, Options $options): Response
    {
        $body = $this->requestsToJson();
        $request = new HttpRequest("POST", $address, [
            'X-Request-Id' => $options->getRequestID(),
            'X-User-Id' => $options->getUserId(),
        ], $body);
        $httpResponse = $this->client->send($request);
        $body = json_decode($httpResponse->getBody()->getContents());

    }

    /**
     * @return string
     */
    protected function requestsToJson():string
    {
        $body = [];
        /**
         * @var $request Request
         */
        foreach ($this->requests as $request) {
            $body[] = $request->toJson();
        }
        return json_encode($body);
    }
}
