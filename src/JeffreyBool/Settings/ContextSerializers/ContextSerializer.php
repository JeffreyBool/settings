<?php

namespace JeffreyBool\Settings\ContextSerializers;

use JeffreyBool\Settings\Context;
use JeffreyBool\Settings\Contracts\ContextSerializer as ContextSerializerContract;

class ContextSerializer implements ContextSerializerContract
{
    /**
     * Serialize context into a string representation.
     *
     * @param \JeffreyBool\Settings\Context $context
     * @return string
     */
    public function serialize(Context $context = null)
    {
        return serialize($context);
    }
}
