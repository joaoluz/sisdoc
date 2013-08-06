<?php
namespace Modules\LoginBundle\business;

use abstraction\business\abstractBusiness;

class loginBusiness extends abstractBusiness
{
	public function teste()
	{
		return $this->get('doctrine')->getEntityManager();
	}
}