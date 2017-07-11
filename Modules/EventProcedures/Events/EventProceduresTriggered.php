<?php
namespace Plenty\Modules\EventProcedures\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * plentymarkets event procedures triggered
 */
abstract class EventProceduresTriggered 
{

	/**
	 * Get the order that triggered the event.
	 */
	abstract public function getOrder(
	):Order;

}