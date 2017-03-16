<?php
    # output.php file

    include_once('includes/config.php');
    include_once('includes/functions-db.php');

    //$Query = 'SELECT JobID,Title,Description,Lat,Lng  FROM  `joblistings` LIMIT 0,30;';
			header('Content-Type: text/xml');
			print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

		$pageid = $_GET["id"];

		switch ($pageid) {
			case "getuser":
				echo "<user>";
					echo "<userDetails id='1' name='Deen Karim' postcode='gu125da' />";
				echo "</user>";
			case "getLocation":
			
				
		
		}
		

mysql_free_result($out);

?>
