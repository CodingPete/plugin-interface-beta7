<?php
namespace Plenty\Modules\DataExchange\Resource\Contracts;


/**
 * Repository Contract for ResourceLoader
 */
interface ResourceLoaderContract 
{

	public function getResource(
		array $sourceOptions
	);

	public function validateSourceOptions(
		array $sourceOptions
	);

	public function getLoaderType(
	):string;

}