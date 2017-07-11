<?php
namespace Plenty\Modules\Tag\Contracts;

use Plenty\Modules\Tag\Models\TagName;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Repository for TagName
 */
interface TagNameRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $lang
	):TagName;

	public function create(
		array $data
	):TagName;

	public function findByName(
		string $name, 
		string $lang
	):array;

}