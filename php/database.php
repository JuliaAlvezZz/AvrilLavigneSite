<?php
	function DBSign($con, $username, $password){
		$sql="SELECT * FROM login WHERE username='$username'";
		$select=mysqli_query($con, $sql);
		$array=mysqli_fetch_array($select);
		$logarray=$array['username'];

		if($username==""){
			echo "<script language='javascript' type='text/javascript'>
					alert('Empty username!');
					window.location.href='index.php';
				</script>";
		}else{
			if($logarray==$username){
				echo "<script language='javascript' type='text/javascript'>
						alert('Username already exists!');
						window.location.href='index.php';
					</script>";
			}else{			
				$sql="INSERT INTO login VALUES (null, '".$username."', '".$password."');";
				mysqli_query($con, $sql);
			}
		}
	}

	function DBLogin($con, $username, $password){
		$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
		$verifica=mysqli_query($con, $sql);

		if(mysqli_num_rows($verifica)<=0){
			echo "<script language='javascript' type='text/javascript'>
					alert('Wrong username or password!');
					window.location.href='index.php';
				</script>";
		}else{		
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			header('Location: paginas/home.php');
		}
	}
?>