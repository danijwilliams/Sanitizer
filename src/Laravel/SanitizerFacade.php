<?php namespace Danijwilliams\Sanitizer\Laravel;

use Illuminate\Support\Facades\Facade;

class SanitizerFacade extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'Danijwilliams\Sanitizer\Sanitizer';
	}

}
