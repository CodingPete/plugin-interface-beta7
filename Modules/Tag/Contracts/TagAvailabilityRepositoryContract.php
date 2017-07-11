<?php
namespace Plenty\Modules\Tag\Contracts;

use Plenty\Modules\Tag\Models\TagAvailability;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Repository for TagAvailability
 */
interface TagAvailabilityRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $availabilityType
	):TagAvailability;

	public function create(
		array $data
	):TagAvailability;

}