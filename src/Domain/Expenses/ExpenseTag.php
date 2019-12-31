<?php

declare(strict_types=1);

namespace App\Domain\Expenses;

use Doctrine\ORM\Mapping as ORM;
use Gammadia\Snowflake\Snowflake;

/**
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="dc_expense_tag")
 * @ORM\Entity()
 *
 * @noRector Rector\SOLID\Rector\Class_\FinalizeClassesWithoutChildrenRector
 */
class ExpenseTag
{
    /**
     * @var Expense
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Expense", inversedBy="expenseTags")
     */
    private $expense;

    /**
     * @var Snowflake
     *
     * @ORM\Id
     * @ORM\Column(name="tag_id", type="snowflake")
     */
    private $tagId;

    public function __construct(Expense $expense, Snowflake $tagId)
    {
        $this->expense = $expense;
        $this->tagId = $tagId;
    }

    public function tagId(): Snowflake
    {
        return $this->tagId;
    }
}
