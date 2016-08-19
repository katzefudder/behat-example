<?php

namespace features\bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

use Katzefudder\Greeting;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
	protected $instance;
	
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(){}
	
	
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
	
	/**
	 * @Given /^the name "([^"]*)"$/
	 */
	public function theName($arg1)
	{
		$this->instance = new Greeting($arg1);
		assertEquals($this->instance->getName(), $arg1);
	}
	
	/**
	 * @Then /^the script should say "([^"]*)"$/
	 */
	public function theScriptShouldSay($arg1)
	{
		$this->instance = new Greeting($arg1);
		assertEquals($this->instance->greet(), 'Hello '.$arg1);
	}
	
	/**
	 * @Given /^no name$/
	 */
	public function noName()
	{
		$this->instance = new Greeting();
		assertEquals($this->instance->greet(), 'Hello unknown stranger');
	}
	
	/**
	 * @Given I visit :arg1
	 */
	public function iVisit($script)
	{
		$this->visit($script);
	}
	
	/**
	 * @When I enter :arg1 in the :arg2 field
	 */
	public function iEnterInTheField($value, $field)
	{
		$this->fillField($field, $value);
	}
	
	
	/**
	 * @When I don't enter anything in the :arg1 field
	 */
	public function iDonTEnterAnythingInTheField($field)
	{
		$this->fillField($field, '');
	}
}
