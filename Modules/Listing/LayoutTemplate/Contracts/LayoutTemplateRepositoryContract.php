<?php
namespace Plenty\Modules\Listing\LayoutTemplate\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Listing\LayoutTemplate\Models\LayoutTemplate;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * The LayoutTemplateRepositoryContract is the interface for the layout template repository. This interface allows you to get a single layout template or lists of layout templates as well as to create, update or delete a layout tempalte.
 */
interface LayoutTemplateRepositoryContract 
{

	/**
	 * Get an layout template.
	 */
	public function get(
		int $id, 
		array $with = []
	):LayoutTemplate;

	/**
	 * Create an layout template.
	 */
	public function create(
		array $data
	):LayoutTemplate;

	/**
	 * Delete layout template
	 */
	public function delete(
		int $id
	):bool;

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