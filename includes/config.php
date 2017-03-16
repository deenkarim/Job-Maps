<?php
    # config.php file
    
    $MYSQL_USER = 'b4_10038049';
    $MYSQL_PASS = 'alex2008';
    $MYSQL_DATABASE = 'b4_10038049_hopjob';
    $MYSQL_HOST = 'sql301.byethost4.com';

    // Connect to the DB
    $sql = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS);
    mysql_select_db($MYSQL_DATABASE, $sql);
    if (!$sql) {
       die('Could not connect: '. mysql_errno() . mysql_error());
    }

?>