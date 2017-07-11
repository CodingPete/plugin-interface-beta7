<?php
namespace Plenty\Modules\Account\Address\Contracts;

use Plenty\Modules\Account\Address\Models\AddressContactRelation;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * The AddressContactRelationRepositoryContract is the interface for the address contact relation repository.
 */
interface AddressContactRelationRepositoryContract 
{

	/**
	 * Creates address contact relations.
	 */
	public function createAddressContactRelation(
		array $data
	):array;

	/**
	 * Updates address contact relations.
	 */
	public function updateAddressContactRelation(
		array $data
	):array;

	/**
	 * Gets address contact relation by ID.
	 */
	public function findAddressContactRelation(
		int $addressContactRelationId
	):AddressContactRelation;

	/**
	 * Deletes an address contact relation.
	 */
	public function deleteAddressContactRelation(
		int $addressContactRelationId
	):bool;

	/**
	 * Lists address contact relations.
	 */
	public function listAddressContactRelations(
		array $filter = [], 
		array $with = [], 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

}