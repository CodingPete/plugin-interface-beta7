<?php
namespace Plenty\Modules\Listing\Market\History\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Listing\Market\History\Models\ListingMarketHistory;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ListingMarketHistoryRepositoryContract is the interface for the listing market history repository. This interface allows you to get a single listing market history or to list several listing market histories.
 */
interface ListingMarketHistoryRepositoryContract 
{

	/**
	 * Get a listing market.
	 */
	public function get(
		int $id, 
		array $with = []
	):ListingMarketHistory;

	/**
	 * List listing market histories
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	/**
	 * End the listing market histories on the designated markets.
	 */
	public function end(
		array $ids, 
		array $params = []
	):array;

	/**
	 * Relist the listing market histories on the designated markets.
	 */
	public function relist(
		array $ids
	);

	/**
	 * Update the listing market histories on the designated markets.
	 */
	public function update(
		array $ids, 
		array $options = []
	):array;

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