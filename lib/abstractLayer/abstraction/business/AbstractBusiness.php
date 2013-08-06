<?php
namespace abstraction\business;

abstract class abstractBusiness 
{
	protected $container;
	public function __construct($containerInterface) 
	{
		$this->container = $containerInterface;
	}
}