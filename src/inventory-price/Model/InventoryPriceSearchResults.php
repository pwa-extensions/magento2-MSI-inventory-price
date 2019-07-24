<?php

declare(strict_types=1);

namespace PwaExt\InventoryPrice\Model;

use Magento\Framework\Api\SearchResults;
use PwaExt\InventoryPrice\Api\Data\InventoryPriceSearchResultsInterface;

/**
 * Class InventoryPriceSearchResults
 * @package PwaExt\InventoryPrice\Model
 */
class InventoryPriceSearchResults extends SearchResults implements InventoryPriceSearchResultsInterface
{
}
