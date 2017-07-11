<?php
namespace Plenty\Modules\DeleteLog\Contracts;

use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * List delete log entries.
 */
interface DeleteLogRepositoryContract 
{

	/**
	 * List delete log entries
	 */
	public function search(
		int $page, 
		int $itemsPerPage
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