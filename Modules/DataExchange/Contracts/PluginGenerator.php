<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * PluginGenerator
 */
abstract class PluginGenerator 
{

	const RESOURCE_PATH = 'data_exchange/exports';

	const RESOURCE_CACHE_EXTENSION = '_build_cache';

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