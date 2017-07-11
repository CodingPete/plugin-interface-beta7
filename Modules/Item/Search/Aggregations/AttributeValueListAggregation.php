<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Nested\NestedTopHitsAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\IndependentSource;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * To be written
 */
abstract class AttributeValueListAggregation implements SearchInterface

{

	const NAME = 'attributes';

	abstract public function getName(
	):string;

	abstract public function getField(
	):string;

	abstract public function getSize(
	):int;

	abstract public function getAggregation(
	):array;

	abstract public function getPath(
	):string;

	abstract public function process(
		array $data
	):array;

	abstract public function toArray(
	):array;

	abstract public function getType(
	):string;

	abstract public function addFilter(
		TypeInterface $filter
	):self;

	abstract public function addSource(
		SourceInterface $source
	):self;

	abstract public function setSorting(
		SortingInterface $sorting
	):self;

	abstract public function setPage(
		int $page, 
		int $rowsPerPage
	):self;

	abstract public function getSources(
	);

}