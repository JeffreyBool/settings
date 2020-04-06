<?php

namespace JeffreyBool\Settings\Contracts;

use JeffreyBool\Settings\Context;

interface ContextSerializer
{
    /**
     * Serialize context into a string representation.
     *
     * @param \JeffreyBool\Settings\Context $context
     * @return string
     */
    public function serialize(Context $context = null);
}
