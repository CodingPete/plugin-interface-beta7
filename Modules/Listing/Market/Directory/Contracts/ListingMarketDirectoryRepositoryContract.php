<?php
namespace Plenty\Modules\Listing\Market\Directory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Listing\Market\Directory\Models\ListingMarketDirectory;

/**
 * The contract for the listing market directory repository.
 */
interface ListingMarketDirectoryRepositoryContract 
{

	/**
	 * Get a listing market directory
	 */
	public function get(
		int $id
	):ListingMarketDirectory;

	/**
	 * Create an listing market directory.
	 */
	public function create(
		array $data
	):array;

	/**
	 * Update listing market directory
	 */
	public function update(
		int $id, 
		array $data
	):ListingMarketDirectory;

	/**
	 * Delete a listing market directory
	 */
	public function delete(
		int $id
	);

}