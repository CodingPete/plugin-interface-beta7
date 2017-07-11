<?php
namespace Plenty\Modules\Listing\Market\Info\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ListingMarketInfoRepositoryContract is the interface for the listing market info repository. This interface allows you to get a information about one or many listing markets.
 */
interface ListingMarketInfoRepositoryContract 
{

	/**
	 * List listing market infos by filter options
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
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