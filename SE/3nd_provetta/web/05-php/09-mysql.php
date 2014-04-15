<?php

$mysqli = new mysqli('didattica.science.unitn.it:3306', 'sweng002', 'sweng002abc', 'db_sweng002');
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
} 
 
$stmt = $mysqli->prepare("select id, title, url from pins");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
 
$stmt->execute();
 
$result = $stmt->get_result();
 
echo "<ul>\n";

while($row = $result->fetch_assoc()){
	printf("\t<li><a href='%s'>%s</a></li>\n",
		$row['url'],
		$row['title']		
	);
}
echo "</ul>\n";
 
$stmt->close();
?>