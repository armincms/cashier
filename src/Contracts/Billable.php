<?php 

namespace Armincms\Cashier\Contracts;


interface Billable
{
	/**
	 * Get the billing amount.
	 * 
	 * @return float
	 */
	public function amount() : float;

	/**
	 * Get the currency code.
	 * 
	 * @return float
	 */
	public function currency() : string; 
}