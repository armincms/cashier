<?php 

namespace Armincms\Cashier\Contracts;

use Symfony\Component\HttpFoundation\Response;
 

interface Port
{
	/**
	 * Ready the port for payment.
	 * 
	 * @param  Request  $request  
	 * @param  Billable $billable 
	 * @param  string   $callback  
	 * @return \Symfony\Component\HttpFoundation\Response
	 * 
     * @throws \InvalidArgumentException
	 */
	public function pay(Request $request, Billable $billable, string $callback); 

	/**
	 * Verify the payment and get the tracking code.
	 * 
	 * @return string
	 * 
     * @throws \InvalidArgumentException
	 */
	public function verify(Request $request): string;
}