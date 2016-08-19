<?php
require __DIR__ . '/vendor/autoload.php';

use Katzefudder\Greeting;

?>
	<html>
	<form>
		<label>Name: <input name="name"/></label>
		<button name="submit">Say Hello!</button>
	</form>
<?php
$greeting = new Greeting($_GET['name']);
echo $greeting->greet();