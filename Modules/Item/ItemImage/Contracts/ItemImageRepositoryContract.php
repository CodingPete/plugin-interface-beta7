<?php
namespace Plenty\Modules\Item\ItemImage\Contracts;

use Plenty\Modules\Item\ItemImage\Models\ItemImage;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item image repository
 */
interface ItemImageRepositoryContract 
{

	/**
	 * Updates an image. The ID of the image must be specified.
	 */
	public function update(
		array $data, 
		int $imageId
	):ItemImage;

	/**
	 * Deletes an image. The ID of the item must be specified.
	 */
	public function delete(
		int $imageId
	):DeleteResponse;

	/**
	 * Shows an image. The ID of the item must be specified.
	 */
	public function show(
		int $imageId
	):ItemImage;

	/**
	 * Lists images. The ID of the item must be specified.
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * Lists images. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Uploads an item image
	 */
	public function upload(
		array $data
	):ItemImage;

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