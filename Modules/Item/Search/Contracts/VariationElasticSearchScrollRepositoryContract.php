<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchScrollRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;

/**
 * kommt noch
 */
interface VariationElasticSearchScrollRepositoryContract 
{

	public function hasNext(
	):bool;

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		SearchInterface $search
	):ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}