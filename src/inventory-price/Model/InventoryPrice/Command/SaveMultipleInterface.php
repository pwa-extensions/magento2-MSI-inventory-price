<?php

declare(strict_types=1);

namespace PwaExt\InventoryPrice\Model\InventoryPrice\Command;

/**
 * Interface SaveMultipleInterface
 * @package PwaExt\InventoryPrice\Model\InventoryPrice\Command
 */
interface SaveMultipleInterface
{
    /**
     * @param array $priceItems
     */
    public function execute(array $priceItems): void;
}
