<?php

// 1. Создать родительский (главный класс)
// 1.1 Класс должен содержать 2 свойства
// 1.2 Каждое свойство должно иметь геттеры и сеттеры
// 1.3 должен содержать абстрактную функцию возведения в степень
abstract class Shops
{
    public int $incomes;
    public int $taxes;

    public function getIncomes(): int
    {
        return $this->incomes;
    }

    public function setIncomes(int $incomes): void
    {
        $this->incomes = $incomes;
    }

    public function getTaxes(): int
    {
        return $this->taxes;
    }

    public function setTaxes(int $taxes): void
    {
        $this->taxes = $taxes;
    }

    abstract function calculateProfit(int $incomes , int $taxes) ;
}

// 2 Создать 3 наследника родительского класса
// 2.1 Каждый наследник должен содержать одно свойство
// 2.2 Каждое свойство должно иметь геттер и сеттер
// 2.3 Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// 2.4 Один наследник не должен быть наследуемым
Class FoodProducts extends Shops
{
    public int $additionalSpending;

    public function getAdditionalSpending(): int
    {
        return $this->additionalSpending;
    }

    public function setAdditionalSpending(int $additionalSpending): void
    {
        $this->additionalSpending = $additionalSpending;
    }

    public function calculateProfitWithoutAdditionalSpending(): int
    {
        return $this->getIncomes() - $this->getTaxes() + $this->getAdditionalSpending();
    }

    public function calculateProfit(int $incomes , int $taxes): int
    {
        return pow($incomes , $taxes);
    }
}

final Class NonFoodProducts extends Shops
{
    public int $additionalSpending;

    public function getAdditionalSpending(): int
    {
        return $this->additionalSpending;
    }

    public function setAdditionalSpending(int $additionalSpending): void
    {
        $this->additionalSpending = $additionalSpending;
    }

    public function calculateProfitWithoutAdditionalSpending(): int
    {
        return $this->getIncomes() - $this->getTaxes() + $this->getAdditionalSpending();
    }

    public function calculateProfit(int $incomes , int $taxes): int
    {
        return pow($incomes , $taxes);
    }
}

Class Cooking extends Shops
{
    public int $additionalSpending;

    public function getAdditionalSpending(): int
    {
        return $this->additionalSpending;
    }

    public function setAdditionalSpending(int $additionalSpending): void
    {
        $this->additionalSpending = $additionalSpending;
    }

    public function calculateProfitWithoutAdditionalSpending(): int
    {
        return $this->getIncomes() - $this->getTaxes() + $this->getAdditionalSpending();
    }

    public function calculateProfit(int $incomes , int $taxes): int
    {
        return pow($incomes , $taxes);
    }
}

// 3 Создать по 2 наследника от наследников первого уровня
// 3.1 Каждое свойство должно иметь геттер и сеттер
// 3.2 Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// 3.3 И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
// 3.4 В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции
class Seller extends FoodProducts
{
    public int $totalSalaries;

    public function getTotalSalaries(): int
    {
        return $this->totalSalaries;
    }

    public function setTotalSalaries(int $totalSalaries): void
    {
        $this->totalSalaries = $totalSalaries;
    }

    public function calculateTotalSpending(): int
    {
        return $this->getTotalSalaries() + $this->getAdditionalSpending();
    }

    public function calculateProfitWithoutTotalSalaries(): int
    {
        return $this->getIncomes() - $this->getTaxes() - $this->getTotalSalaries();
    }
}

class Manager extends FoodProducts
{
    public int $totalSalaries;

    public function getTotalSalaries(): int
    {
        return $this->totalSalaries;
    }

    public function setTotalSalaries(int $totalSalaries): void
    {
        $this->totalSalaries = $totalSalaries;
    }

    public function calculateTotalSpending(): int
    {
        return $this->getTotalSalaries() + $this->getAdditionalSpending();
    }

    public function calculateProfitWithoutTotalSalaries(): int
    {
        return $this->getIncomes() - $this->getTaxes() - $this->getTotalSalaries();
    }
}

class Cook extends Cooking
{
    public int $totalSalaries;

    public function getTotalSalaries(): int
    {
        return $this->totalSalaries;
    }

    public function setTotalSalaries(int $totalSalaries): void
    {
        $this->totalSalaries = $totalSalaries;
    }

    public function calculateTotalSpending(): int
    {
        return $this->getTotalSalaries() + $this->getAdditionalSpending();
    }

    public function calculateProfitWithoutTotalSalaries(): int
    {
        return $this->getIncomes() - $this->getTaxes() - $this->getTotalSalaries();
    }
}

class DishWasher extends Cooking
{
    public int $totalSalaries;

    public function getTotalSalaries(): int
    {
        return $this->totalSalaries;
    }

    public function setTotalSalaries(int $totalSalaries): void
    {
        $this->totalSalaries = $totalSalaries;
    }

    public function calculateTotalSpending(): int
    {
        return $this->getTotalSalaries() + $this->getAdditionalSpending();
    }

    public function calculateProfitWithoutTotalSalaries(): int
    {
        return $this->getIncomes() - $this->getTaxes() - $this->getTotalSalaries();
    }
}

$test = new DishWasher();
$test->setTaxes(100);
$test->setIncomes(200);
$test->setTotalSalaries(50);

var_dump($test->calculateProfitWithoutTotalSalaries());
