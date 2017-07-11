<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * To be written
 */
interface SearchInterface 
{

	public function addFilter(
		TypeInterface $filter
	);

	public function addSource(
		SourceInterface $source
	);

	public function setSorting(
		SortingInterface $sorting
	);

	public function process(
		array $data
	);

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}