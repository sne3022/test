<?php
$_from = $_POST['date1'];
$_to =$_POST['date2'];

$connect = new mysqli("192.168.123.100", "sne", "1234", "sne_board");
$query = "select board_idx, board_title, board_postdate from a1 where board_postdate  between '".$_from."' and '".$_to."'";

$result = $connect->query($query);

$a1Array = array();
while($row = $result->fetch_array())
{
	$a1Array[$row['board_idx']]= $row;
}

echo json_encode($a1Array);

?>
