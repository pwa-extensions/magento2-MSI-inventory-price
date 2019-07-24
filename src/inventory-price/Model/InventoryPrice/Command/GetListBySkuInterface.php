<?php

declare(strict_types=1);

namespace PwaExt\InventoryPrice\Model\InventoryPrice\Command;
use PwaExt\InventoryPrice\Api\Data\InventoryPriceSearchResultsInterface;

/**
 * Interface GetListBySkuInterface
 * @package PwaExt\InventoryPrice\Model\InventoryPrice\Command
 */
interface GetListBySkuInterface
{
    /**
     * @param string $sku
     * @return InventoryPriceSearchResultsInterface
     */
    public function execute(string $sku): InventoryPriceSearchResultsInterface;
}
