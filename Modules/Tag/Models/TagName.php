<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag name model.
 */
abstract class TagName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$tagId;
	public		$tagLang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}