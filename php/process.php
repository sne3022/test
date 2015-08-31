<?php
$connect = new mysqli("192.168.123.100", "sne", "1234", "sne_board");

$query = "select * from sb_fileupload";

$result = $connect->query($query);

$a1Array = array();

while($row = $result->fetch_array())
{
	$a1Array[$row['file_idx']]= $row;
}

echo json_encode($a1Array);

?>