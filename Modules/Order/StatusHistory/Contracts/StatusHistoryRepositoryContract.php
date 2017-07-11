<?php
namespace Plenty\Modules\Order\StatusHistory\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This interface allows you to get the status history of an order and to list the status histories of all orders.
 */
interface StatusHistoryRepositoryContract 
{

	/**
	 * Get the status history of an order
	 */
	public function getStatusHistoryByOrderId(
		int $orderId, 
		array $columns = []
	):Collection;

	/**
	 * List status histories
	 */
	public function getStatusHistory(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

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