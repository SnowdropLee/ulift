<?php
/*
*����һ�����򷵻ض��������б�
*���������
  areaId-һ������ID������
*��������
  {
    "subAreaId": 1,
    ...
  }
*/
@$areaId = $_REQUEST['areaId'] or die('areaId required');
require('init.php');

$sql = "SELECT * FROM subArea WHERE areaId=$areaId";
$result = mysqli_query($conn,$sql);
$output= mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);
?>
