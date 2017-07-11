<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * generator for csv content
 */
abstract class CSVPluginGenerator 
{

	const RESOURCE_PATH = 'data_exchange/exports';

	const RESOURCE_CACHE_EXTENSION = '_build_cache';

	protected function setDelimiter(
		string $delimiter
	)
	{
	}

	protected function setEnclosure(
		string $enclosure
	)
	{
	}

	protected function addCSVContent(
		array $data
	)
	{
	}

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generatePluginContent(
		 $resultData, 
		array $formatSettings = [], 
		array $filter = []
	);

}