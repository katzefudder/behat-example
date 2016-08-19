<?php

namespace Katzefudder;

class Greeting {
	private $name = '';
	
	public function __construct($name) {
		$this->name = $name;
		return $this;
	}
	
	
	public function greet() {
		return 'Hello '.($this->name ? $this->name : 'unknown stranger');
	}
	
	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}
}