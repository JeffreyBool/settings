<?php

namespace JeffreyBool\Settings\Contracts;

use JeffreyBool\Settings\Context;

interface KeyGenerator
{
    /**
     * Generate storage key for a given key and context.
     *
     * @param string $key
     * @param \JeffreyBool\Settings\Context $context
     * @return string
     */
    public function generate($key, Context $context = null);
}
