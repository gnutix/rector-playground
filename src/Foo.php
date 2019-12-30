<?php

namespace RectorPlayground;

final class Foo implements \IteratorAggregate
{
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator([new Baz(), new Baz()]);
    }
}
