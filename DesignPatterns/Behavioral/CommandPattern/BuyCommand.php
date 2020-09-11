<?php

namespace DesignPatterns\Behavioral\CommandPattern;

/**
 * Class BuyCommand.
 */
class BuyCommand implements Command
{
    /**
     * @var Receiver
     */
    protected Receiver $console;

    /**
     * @var int
     */
    protected int $price;

    /**
     * @var int
     */
    protected int $count;

    /**
     * Turnips constructor.
     * 
     * @param Receiver $console
     */
    public function __construct(Receiver $console, int $price, int $count)
    {
        $this->console = $console;
        $this->price = $price;
        $this->count = $count;
    }

    /**
     * @return void
     */
    public function execute()
    {
        $this->console->buy($this->price, $this->count);
    }
}
