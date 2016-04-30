<?php

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

class Test extends \Tester\TestCase
{

	public function testFunction()
	{
		Assert::true(TRUE);
	}

}

(new Test)->run();
