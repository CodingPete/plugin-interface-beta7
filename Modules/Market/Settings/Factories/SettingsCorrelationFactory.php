<?php
namespace Plenty\Modules\Market\Settings\Factories;

use Plenty\Exceptions\ValidationException;
use Validator;

/**
 * Factory that allows to store correlation between market settings and plentymarkets settings.
 */
abstract class SettingsCorrelationFactory 
{

	const TYPE_SHIPPING = 'shipping';

	const TYPE_ATTRIBUTE = 'attribute';

	const TYPE_CATEGORY = 'category';

	const TYPE_PROPERTY = 'property';

	/**
	 * Set here the type of relation that should be created.
	 */
	abstract public function type(
		string $type
	):SettingsCorrelationFactory;

	/**
	 * Use this method to create a relation of the chosen type.
	 */
	abstract public function createRelation(
		int $settingsId, 
		int $correlationId
	);

	/**
	 * Clear all relations for a given correlation type.
	 */
	abstract public function clear(
		 $marketplaceId
	);

	/**
	 * Get all correlations for a given marketplace ID.
	 */
	abstract public function all(
		 $marketplaceId
	):array;

	/**
	 * Get a specific settings by marketplace id and correlation id.
	 */
	abstract public function getSettingsByCorrelation(
		 $marketplaceId, 
		int $correlationId
	);

}