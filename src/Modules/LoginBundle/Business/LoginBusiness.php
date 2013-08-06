<?php
namespace Modules\LoginBundle\Business;

use abstraction\business\AbstractBusiness;

class LoginBusiness extends AbstractBusiness
{
	public function teste()
	{
		return $this->container->get('doctrine')->getEntityManager();
	}
}