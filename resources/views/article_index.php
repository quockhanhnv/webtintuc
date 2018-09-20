<?php 
echo 'Article Index<br/>';
echo "Hello, my name is $name";
echo "<table border = 1>";
foreach ($cars as $key => $value) {
	echo "<tr><td>$key - $value</td><tr>";
}

echo "</table>";