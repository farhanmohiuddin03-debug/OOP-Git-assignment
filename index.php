<?php
require 'Person.php';

$person = new Person("John");
echo $person->greet();
echo "<br>" . $person->sayGoodbye();
?>