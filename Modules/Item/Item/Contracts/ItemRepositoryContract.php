<?php
namespace Plenty\Modules\Item\Item\Contracts;

use Illuminate\Http\Request;
use Plenty\Modules\Item\Item\Models\Item;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * The contract for the attribute value repository
 */
interface ItemRepositoryContract 
{

	/**
	 * Creates an item.
	 */
	public function add(
		array $data
	);

	/**
	 * Get an item. The ID of the item must be specified.
	 */
	public function show(
		int $itemId, 
		array $columns = [], 
		string $lang = "de", 
		array $with = []
	);

	public function search(
		 $columns = [], 
		 $lang = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	);

	/**
	 * Update a item. The ID of the item must be specified.
	 */
	public function update(
		array $data, 
		int $itemId
	):Item;

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