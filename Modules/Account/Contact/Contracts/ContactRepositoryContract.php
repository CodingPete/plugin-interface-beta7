<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ContactRepositoryContract is the interface for the contact repository. This interface allows to list, get, create, update and delete contacts. A contact is equivalent to a person.
 */
interface ContactRepositoryContract 
{

	/**
	 * Creates a contact and returns it.
	 */
	public function createContact(
		array $data
	):Contact;

	/**
	 * Updates a contact and returns it. The ID of the contact must be specified.
	 */
	public function updateContact(
		array $data, 
		int $contactId
	):Contact;

	/**
	 * Deletes a contact. The ID of the contact must be specified.
	 */
	public function deleteContact(
		int $contactId, 
		bool $checkExistingOrders = null
	):bool;

	/**
	 * Gets a contact. The ID of the contact must be specified.
	 */
	public function findContactById(
		int $contactId, 
		array $with = []
	):Contact;

	/**
	 * List contacts
	 */
	public function getContactList(
		array $filter = [], 
		array $with = [], 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Returns an existing contact by a contact option information.
	 */
	public function getContactByOptionValue(
		string $value, 
		int $typeId, 
		int $subTypeId
	):Contact;

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