<?php
namespace Plenty\Modules\StockManagement\Stock\Contracts;

use Plenty\Modules\StockManagement\Stock\Models\Stock;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The StockRepositoryContract is the interface for the stock repository. This interface allows you to find, create and update stock. Stock is assigned to one variation and is stored in warehouses.
 */
interface StockRepositoryContract 
{

	/**
	 * List stock of a warehouse
	 */
	public function listStockByWarehouseId(
		int $warehouseId, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * List stock
	 */
	public function listStock(
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * List stock by warehouse type
	 */
	public function listStockByWarehouseType(
		string $type, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * Corrects stock. The ID of the warehouse has to be provided.
	 */
	public function correctStock(
		int $warehouseId, 
		array $data
	);

	/**
	 * Book incoming stock
	 */
	public function bookIncomingItems(
		int $warehouseId, 
		array $data
	);

	/**
	 * Redistribute stock
	 */
	public function redistributeStock(
		array $data
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}