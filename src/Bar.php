<?php

namespace App;

final class Bar
{
    /**
     * @return iterable<class-string>
     */
    public function someMethod(): iterable
    {
        yield self::class;
    }
}
