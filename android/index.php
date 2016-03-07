<?php
include_once "../dbConnection.php";
$json = array();
$result = mysqli_query ($con, "SELECT datetime, news_item FROM news WHERE datetime>DATE_SUB(CURDATE(), INTERVAL 100 DAY) ORDER BY datetime DESC");
$now=new DateTime('now');
$now->sub(new DateInterval('P10D'));
while($row = mysqli_fetch_array ($result))     
{
    $date=new DateTime($row['datetime']);
    $flag=($date>$now)?1:0;
    $bus = array(
        'id' => date_format(date_create($row['datetime']), 'g:i A, l jS F Y'),
        'name' => $row['news_item'],
	'flag' => $flag
    );
    array_push($json, $bus);
}
$jsonstring = json_encode(array('news'=>$json));
echo $jsonstring;
die();
?>
