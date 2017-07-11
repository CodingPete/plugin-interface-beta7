<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeValue;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute value repository
 */
interface AttributeValueRepositoryContract 
{

	/**
	 * Creates an attribute value. The ID of the attribute must be specified.
	 */
	public function create(
		array $data, 
		int $attributeId
	):AttributeValue;

	/**
	 * Updates an attribute value. The ID of the attribute and the ID of the value must be specified.
	 */
	public function update(
		array $data, 
		int $attributeId, 
		int $id
	):AttributeValue;

	/**
	 * Deletes an attribute value. The ID of the attribute and the ID of the value must be specified.
	 */
	public function delete(
		int $attributeId, 
		int $id
	):DeleteResponse;

	/**
	 * Lists attribute values. The ID of the attribute must be specified.
	 */
	public function findByAttributeId(
		int $attributeId, 
		int $page = 1, 
		int $perPage = 50, 
		array $columns = []
	):array;

	/**
	 * Gets a attribute value. The ID of the attribute and the ID of the value must be specified.
	 */
	public function findById(
		int $attributeId, 
		int $id
	):AttributeValue;

	/**
	 * Lists all attribute values.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50
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