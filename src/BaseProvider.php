<?php

namespace RubyFaker;

use ReflectionClass;
use Faker\Provider\Base;

abstract class BaseProvider extends Base
{
    protected function prefix()
    {
        $reflect = new ReflectionClass($this);
        return lcfirst($reflect->getShortName());
    }

    public function __call($methodName, $arguments)
    {
        $prefix = $this->prefix();
        $start = strlen($prefix);
        $suffix = substr($start, $methodName);
        $fieldName = lcfirst($suffix);

        if (
            $prefix.$suffix === $methodName
            && isset(static::${$fieldName})
        ) {
            return static::randomElement(static::${$fieldName});
        }
    }
}