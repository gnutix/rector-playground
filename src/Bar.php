<?php

namespace RectorPlayground;

final class Bar
{
    /**
     * @var Foo<Baz>
     */
    private $foo;

    /**
     * @param Foo<Baz> $foo
     */
    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}
