<?php

namespace Multiple\Frontend\Models;

class Products extends \Phalcon\Mvc\Model 
{

	public function initialize()
	{
		$this->setSource('products');
	}
	
}