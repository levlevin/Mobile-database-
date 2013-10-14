<?php
include("sql.php"); //Connect to SQL

$result = mysql_query("SELECT `Username`, `Password` FROM users WHERE `id` = '1'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // the email value
?>