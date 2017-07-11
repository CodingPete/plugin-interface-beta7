<?php
namespace Plenty\Modules\Item\VariationStock\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationStock\Models\VariationStock;
use Plenty\Modules\Item\VariationStock\Models\VariationStockMovement;
use Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract of the variation stock repository
 */
interface VariationStockRepositoryContract 
{

	/**
	 * List stock per warehouse
	 */
	public function listStockByWarehouse(
		int $variationId, 
		array $columns
	):array;

	/**
	 * List stock movements for a variation
	 */
	public function listStockMovements(
		int $variationId, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * Book incoming stock
	 */
	public function bookIncomingItems(
		int $variationId, 
		array $data
	):array;

	/**
	 * Correct stock
	 */
	public function correctStock(
		int $variationId, 
		array $data
	):array;

	/**
	 * Redistribute stock
	 */
	public function redistributeStock(
		int $variationId, 
		array $data
	):PaginatedResult;

}