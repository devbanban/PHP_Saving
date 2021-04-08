<?php
$p=$_GET['p'];
if($p=='adddb'){
		$detail = $_POST['detail'];
		$amount = $_POST['amount'];
		$sql="INSERT INTO tbl_income
		(detail, amount)
		VALUES
		('$detail', '$amount')
		";
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
			mysqli_close($con);
	
	if($result){
			echo "<script type='text/javascript'>";
			echo "alert('Add Income Succesfuly');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
			}
			else{
			echo "<script type='text/javascript'>";
			echo "alert('Error!!');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
			}
}
?>
