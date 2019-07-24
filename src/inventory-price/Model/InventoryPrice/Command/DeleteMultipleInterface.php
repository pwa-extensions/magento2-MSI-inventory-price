<?php

declare(strict_types=1);

namespace PwaExt\InventoryPrice\Model\InventoryPrice\Command;

/**
 * Interface DeleteMultipleInterface
 * @package PwaExt\InventoryPrice\Model\InventoryPrice\Command
 */
interface DeleteMultipleInterface
{
    /**
     * @param array $priceItems
     */
    public function execute(array $priceItems): void;
}
