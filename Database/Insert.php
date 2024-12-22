<?php

namespace Database;

class Insert
{
    public function build($values, $table,  $fields)
    {
        $values = $this->prepareValues($values);
        $countElements = count($values);
        $strFields = implode(',', $fields);
        $countFields = count($fields);

        $sql = '';

        foreach ($values as $key => $value) {
            $countValues = count($value);

            if ($countFields != $countValues) {
                return 'Обнаружена ошибка: ключи в массивах должны совпадать';
            }

            $strValueFields = implode(',', $value);

            if ($key != $countValues - 1 && $countElements != 1) {
                $sql = $sql . "($strValueFields),";
            } else {
                $sql = $sql . "($strValueFields)";
            }

        }

        return $this->buildSql($table, $strFields, $sql);
    }

    public function execute($query)
    {
        $connection = Connection::getConnection();

        return $connection->exec($query);
    }

    private function buildSql($table, $fields, $values)
    {
        return "INSERT INTO $table ($fields) VALUE $values";
    }

    private function prepareValues($values)
    {
        if (isset($values[0]) && !is_array($values[0])) {
            $values = [$values];
        }

        return $values;
    }
}
