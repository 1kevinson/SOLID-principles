<?php

class Order
{
    private array $lineItems;
    private DateTime $dateOrder;
    private Shipping $shipping;

    /**
     * Order constructor.
     * @param Shipping $shipping
     */
    public function __construct(Shipping $shipping)
    {
        $this->shipping = $shipping;
    }

    public function getTotal(): int
    {
        return 15;
    }

    public function getDateOrder(): DateTime
    {
        return $this->dateOrder;
    }

    public function getShippingCost(): int
    {
        return $this->shipping->getCost($this);
    }

}

interface Shipping
{
    public function getCost(Order $order): int;

    public function getDate(Order $order): DateTime;
}

class Air implements Shipping
{
    public function getCost(Order $order): int
    {
        if ($this->orderNumberGreaterThan100($order)) return 0;
        return $order->getTotal() * 0.15;
    }

    public function getDate(Order $order): DateTime
    {
        return $order->getDateOrder();
    }

    private function orderNumberGreaterThan100(Order $order): bool
    {
        return $order->getTotal() > 100;
    }
}

class Ground implements Shipping
{
    public function getCost(Order $order): int
    {
        if ($this->orderNumberGreaterThan100($order)) return 0;
        return $order->getTotal() * 0.15;
    }

    public function getDate(Order $order): DateTime
    {
        return $order->getDateOrder();
    }

    private function orderNumberGreaterThan100(Order $order): bool
    {
        return $order->getTotal() > 100;
    }
}

class TestShipping
{
    public function main(): void
    {
        $order = new Order(new Air());
        $t = $order->getTotal();
    }
}