<?php
if (!mysql_select_db('uchef', $link = mysql_connect('uchef.mysql.eu1.frbit.com', 'uchef', 'WY6ioOmkHkUd4zMU')))
    echo '<p> db error ' . mysql_errno() . ": " . mysql_error() . '</p>;
?>
