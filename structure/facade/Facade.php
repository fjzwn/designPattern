<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/4
 * Time: 下午5:11
 */

declare(strict_types = 1);

namespace structure\facade;

class Facade
{
    private $buyDrink;
    private $buyFood;
    private $saleBook;
    private $salePen;

    public function __construct(BuyDrink $buyDrink, BuyFood $buyFood, SaleBook $saleBook, SalePen $salePen)
    {
        $this->buyDrink = $buyDrink;
        $this->buyFood = $buyFood;
        $this->saleBook = $saleBook;
        $this->salePen = $salePen;
    }

    public function buy()
    {
        $this->buyDrink->buy();
        $this->buyFood->buy();
    }

    public function sale()
    {
        $this->saleBook->sale();
        $this->salePen->sale();
    }
}