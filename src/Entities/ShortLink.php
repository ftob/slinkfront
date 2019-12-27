<?php

namespace Slinkfront\Entities;

/**
 * Class ShortLink
 * @package Slinkfront\Entities
 */
class ShortLink
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $address;

    /**
     * ShortLink constructor.
     * @param string $id
     * @param string $address
     */
    public function __construct(string $id, string $address)
    {
        $this->id = $id;
        $this->address = $address;
    }
}
