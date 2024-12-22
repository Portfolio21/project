<?php

namespace Database;

class Where
{
    private array $conditions = [];

    public function where(): string
    {
        return ' WHERE ' . $this->getCondition();
    }

    public function orWhere(array $condition): void
    {
        $this->conditions[] = ['OR', $condition];
    }

    public function andWhere(array $condition): void
    {
        $this->conditions[] = ['AND', $condition];
    }

    private function getCondition(): string
    {
        $query = '';

        foreach($this->conditions as $condition) {
            if (!empty($query)) {
                $query .= ' ' . $condition[0] . ' ';
            }

            $query .= '(' . implode(' ', $condition[1]) . ')';
        }

        return $query;
    }
}
