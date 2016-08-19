<?php

use Behat\Behat\Context\BehatContext;

use Katzefudder\Greeting;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
	
	protected $instance;
	
	/**
	 * Initializes context.
	 * Every scenario gets it's own context object.
	 *
	 * @param array $parameters context parameters (set them up through behat.yml)
	 */
	public function __construct(array $parameters)
	{
		
	}
	
	/**
	 * @Given /^a name$/
	 */
	public function aName()
	{
		$this->instance = new Greeting('any name');
		assertEquals($this->instance->getName(), 'any name');
	}
	
	/**
	 * @Then /^the script should greet that name$/
	 */
	public function theScriptShouldGreetThatName()
	{
		$this->instance = new Greeting('whatever name');
		assertEquals($this->instance->greet(), 'Hello whatever name');
	}
}
