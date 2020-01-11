<?php

declare(strict_types=1);

namespace App;

final class CreateExpenseHandler
{
    public function __invoke(CreateExpenseCommand $command): void
    {
        if (count($command->tags) > 0) {
            // something
        }
    }
}
