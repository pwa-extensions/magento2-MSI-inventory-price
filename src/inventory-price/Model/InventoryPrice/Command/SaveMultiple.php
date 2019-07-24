<?php

declare(strict_types=1);

namespace PwaExt\InventoryPrice\Model\InventoryPrice\Command;

use Exception;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\InputException;
use PwaExt\InventoryPrice\Model\ResourceModel\InventoryPrice\SaveMultiple AS SaveMultipleModel;
use Psr\Log\LoggerInterface;

/**
 * @inheritdoc
 */
class SaveMultiple implements SaveMultipleInterface
{
    /**
     * @var SaveMultiple
     */
    private $saveMultiple;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * SaveMultiple constructor.
     * @param SaveMultipleModel $saveMultiple
     * @param LoggerInterface $logger
     */
    public function __construct(
        SaveMultipleModel $saveMultiple,
        LoggerInterface $logger
    ) {
        $this->saveMultiple = $saveMultiple;
        $this->logger = $logger;
    }

    /**
     * @param array $priceItems
     * @throws CouldNotSaveException
     * @throws InputException
     */
    public function execute(array $priceItems): void
    {
        if (empty($priceItems)) {
            throw new InputException(__('Input data is empty'));
        }

        try {
            $this->saveMultiple->execute($priceItems);
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            throw new CouldNotSaveException(__('Could not save InventoryPrice'), $e);
        }
    }
}
