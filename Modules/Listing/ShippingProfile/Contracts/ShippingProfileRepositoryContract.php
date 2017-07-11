<?php
namespace Plenty\Modules\Listing\ShippingProfile\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Listing\ShippingProfile\Models\ShippingProfile;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ShippingProfileRepositoryContract is the interface for the listing shipping profile repository. This interface allows you to get a shipping profile.
 */
interface ShippingProfileRepositoryContract 
{

	/**
	 * Get a shipping profile
	 */
	public function get(
		int $id, 
		array $with = []
	):ShippingProfile;

	/**
	 * Search shipping profiles
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