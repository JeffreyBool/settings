<?php

namespace JeffreyBool\Settings\KeyGenerators;

use JeffreyBool\Settings\Context;
use JeffreyBool\Settings\Contracts\ContextSerializer;
use JeffreyBool\Settings\Contracts\KeyGenerator as KeyGeneratorContract;

class KeyGenerator implements KeyGeneratorContract
{
    /**
     * Context serializer.
     *
     * @var \JeffreyBool\Settings\Contracts\ContextSerializer
     */
    protected $serializer;

    /**
     * @param \JeffreyBool\Settings\Contracts\ContextSerializer $serializer
     */
    public function __construct(ContextSerializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Generate storage key for a given key and context.
     *
     * @param string $key
     * @param \JeffreyBool\Settings\Context $context
     * @return string
     */
    public function generate($key, Context $context = null)
    {
        return md5($key.$this->serializer->serialize($context));
    }
}
