<?php
    # output.php file

    include_once('includes/config.php');
    include_once('includes/functions-db.php');

    $Query = 'SELECT JobID,Title,Description,Lat,Lng  FROM  `joblistings` LIMIT 0,30;';
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
	echo "<markers>";
  $out = mysql_query($Query,$sql);
   $count = 1;
   while ($row = mysql_fetch_array($out, MYSQL_NUM)) {
  // echo "<marker class=\"map-location\" data-jmapping=\"{id: ".$count. ", point: {lng:".$row[4].", lat:".$row[3]."}, category: 'house'}\">";
   //echo "<a href=\"#\" class=\"map-link\">".$row[1]."</a>";
   //echo "<div class=\"info-box\">";
   //echo "<p>house home :).</p>";
   //echo "</div></div>";
      
 //  printf("ID: %s  Name: %s", $row[0], $row[1]); 
 echo "<marker name='".$row[1]."' lat='".$row[3]."' lng='".$row[4]."' desc='".$row[2]."' />";
   $count +=1; 
}

echo "<marker name='Deen'  desc='test' postcode='gu125da' />";
echo "</markers>";
mysql_free_result($out);
    
   // $row = mysql_fetch_array($out);
	//		echo "Name: ".$row['displayname'];
	//	echo " Age: ".$row['timezone'];
?>
