<h1>Testing</h1>

<?php

	foreach (Config::get('companymenu.main') as $value) {
		echo $value['name'];
	}

?>
