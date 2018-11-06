<?php
while($row = mysqli_fetch_assoc($query)){
	
	echo $row['user_id'].'<br/>'.$row['user_full'].'<br/>'.$row['user_name'].'<hr/>';
}
?>