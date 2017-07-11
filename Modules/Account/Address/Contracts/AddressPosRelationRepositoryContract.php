<?php
namespace Plenty\Modules\Account\Address\Contracts;

use Plenty\Modules\Account\Address\Models\AddressPosRelation;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The AddressPosRelationRepositoryContract is the interface for the address POS relation repository.
 */
interface AddressPosRelationRepositoryContract 
{

	/**
	 * Creates an address POS relation.
	 */
	public function createAddressPosRelation(
		array $data
	):AddressPosRelation;

	/**
	 * Updates an address POS relation.
	 */
	public function updateAddressPosRelation(
		int $addressPosRelationId, 
		array $data
	):AddressPosRelation;

	/**
	 * Lists address POS relations.
	 */
	public function findAddressPosRelation(
		int $addressPosRelationId
	):AddressPosRelation;

	/**
	 * Deletes an address POS relation.
	 */
	public function deleteAddressPosRelation(
		int $addressPosRelationId
	);

	/**
	 * Lists address POS relations.
	 */
	public function listAddressPosRelations(
		array $filter = [], 
		array $with = [], 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

}