<?php
	include ('config.php');
	session_start();
	

	if(isset($_POST['msg'])){		
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
		mysqli_query($link,"INSERT INTO users_chat (chat_room_id, chat_message, user_id, chat_date) values ('$id', '$msg' , '".$_SESSION['id']."', NOW())") or die(mysqli_error($link));
	}
?>

<?php
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:login.php');
    exit();
	}
 
	$uquery=mysqli_query($link,"SELECT username FROM users where id='".$_SESSION['id']."'");
	$urow=mysqli_fetch_assoc($uquery);
?>

<?php
	if(isset($_POST['res'])){
		$id = $_POST['id'];
	?>
	<?php
		$query=mysqli_query($link,"SELECT * FROM users_chat LEFT JOIN users on users.id=users_chat.user_id WHERE chat_room_id='$id' ORDER BY chat_date ASC") or die(mysqli_error($link));
		while($row=mysqli_fetch_array($query)){ 
			$resID = $row['user_id'];
			$q=mysqli_query($link,"SELECT username FROM users where id='$resID'");

	        $arr=mysqli_fetch_assoc($q);
	        
			
?>	
		<div>

			<?php echo date('h:i A',strtotime($row['chat_date'])); ?><br>
			

			<?php echo $arr['username']; ?>: <?php echo $row['chat_message']; ?><br>
		</div>
		<br>
	<?php
		}
	}	
?>


