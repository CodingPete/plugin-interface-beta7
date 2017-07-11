<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * A repository for comfortable searches for variations
 */
interface VariationSearchRepositoryContract 
{

	public function setSearchFilter(
		int $name, 
		array $params
	);

	public function setSearchParam(
		string $name, 
		string $value
	);

	public function search(
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