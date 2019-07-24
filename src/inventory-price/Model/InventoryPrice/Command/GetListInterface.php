<?php

declare(strict_types=1);

namespace PwaExt\InventoryPrice\Model\InventoryPrice\Command;

use Magento\Framework\Api\SearchCriteriaInterface;
use PwaExt\InventoryPrice\Api\Data\InventoryPriceSearchResultsInterface;

/**
 * Interface GetListInterface
 * @package PwaExt\InventoryPrice\Model\InventoryPrice\Command
 */
interface GetListInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return InventoryPriceSearchResultsInterface
     */
    public function execute(SearchCriteriaInterface $searchCriteria): InventoryPriceSearchResultsInterface;
}
