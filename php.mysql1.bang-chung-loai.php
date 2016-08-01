<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.hien
{
	color:blue;
}
.an
{
	color:red;
	font-weight:bold;
	background-color:yellow;
	display:block;
}
</style>
</head>

<body>
<?php
	error_reporting(E_ALL);//Develop
	
	//error_reporting(0);//Product
	
	//Ket noi den MySQL
	$link=mysqli_connect('localhost','shop','UrZmT22jh93Axy8b','shop') or die('Lỗi kết nối');
	//Dong bo charset (collation) => hiện thị tiếng Việt
	mysqli_query($link,'set names utf8');
	
	//Truy van
	$sql='select * from `nn_chungloai` order by `ThuTu`';
	$rs=mysqli_query($link,$sql);
	
	/*
	//Lay 1 dong du lieu trong $rs
	$r=mysqli_fetch_assoc($rs);
	
	//Lay 1 cot du lieu cua dong du lieu
	echo $r['TenCL'];
	*/
	/*
	while($r=mysqli_fetch_assoc($rs))
	{
		echo $r['TenCL'],'<hr>';
	}
	*/
	
?>

<table width="500" border="1" cellpadding="5">
  <caption>
    DANH SÁCH CHỦNG LOẠI
  </caption>
  <tr>
    <th width="66" scope="col">STT</th>
    <th width="230" scope="col">Tên</th>
    <th width="70" scope="col">Thứ tự</th>
    <th width="74" scope="col">Ẩn/Hiện</th>
  </tr>
  <?php
  	$i=1;
  	while($r=mysqli_fetch_assoc($rs))
	{
  ?>
      <tr>
        <td align="center"><?php echo $i++; ?></td>
        <td><?php echo $r['TenCL'] ?></td>
        <td align="center"><?php echo $r['ThuTu'] ?></td>
        <td align="center"><?php if($r['AnHien']==1) echo '<span class="hien">Hiện</span>';else echo '<span class="an">Ẩn</span>' ?></td>
  </tr>
  <?php
	}
  ?>
</table>

</body>
</html>
