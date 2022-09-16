



<table border="2" width="500px">
<tr>
<th>Total users</th>
<th>Active user</th>
<th>Deactive user</th>

</tr>

<?php
$total_user=0;
$active_user=0;
$deactive_user=0;
$connect=mysqli_connect("localhost","root","","mytest");
$select=mysqli_query($connect,"select * from tbl_status ");
$total_user=mysqli_num_rows($select);

$select=mysqli_query($connect,"select * from tbl_status where status='1' ");
$active_user=mysqli_num_rows($select);


$select=mysqli_query($connect,"select * from tbl_status where status='0' ");
$deactive_user=mysqli_num_rows($select);



	echo"<tr>";
	echo"<td>".$total_user."</td>";
	echo"<td>".$active_user."</td>";
	echo"<td>".$deactive_user."</td>";
	
	echo"</tr>";
	


?>
</table>