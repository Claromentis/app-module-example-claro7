<?php
namespace Claromentis\Myapp\Rest;

class MyappRest extends \RestVersioned
{
	public function __construct()
	{
		$this->AddVersion(1, new MyappRestV1(), true);
	}
}