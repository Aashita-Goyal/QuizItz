<?php
include('db.php');
if($_POST['id']){
$id=$_POST['id'];
if($id==0){
	echo "<option>Select Topic</option>";
}else{
	$sql = mysqli_query($con,"SELECT * FROM `topic` WHERE b_id='$id'");
	while($row = mysqli_fetch_array($sql)){
		echo '<option value="'.$row['t_id'].'">'.$row['t_name'].'</option>';
		}
	}
}
?>