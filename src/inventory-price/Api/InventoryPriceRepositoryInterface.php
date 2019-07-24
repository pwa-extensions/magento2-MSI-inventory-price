<?php
declare(strict_types=1);

namespace PwaExt\InventoryPrice\Api;

/**
 * Interface InventoryPriceRepositoryInterface
 * @package PwaExt\InventoryPrice\Api
 */
interface InventoryPriceRepositoryInterface
{

    /**
     * @param \PwaExt\InventoryPrice\Api\Data\InventoryPriceInterface[] $priceItems
     * @return void
     */
    public function saveMultiple(
        array $priceItems
    ): void;

    /**
     * @param \PwaExt\InventoryPrice\Api\Data\InventoryPriceInterface[] $priceItems
     * @return void
     */
    public function deleteMultiple(
        array $priceItems
    ): void;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface|null $searchCriteria
     * @return \PwaExt\InventoryPrice\Api\Data\InventoryPriceSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): Data\InventoryPriceSearchResultsInterface;

    /**
     * @param string $sku
     * @return \PwaExt\InventoryPrice\Api\Data\InventoryPriceSearchResultsInterface
     */
    public function getListBySku(
        string $sku
    ): Data\InventoryPriceSearchResultsInterface;
}