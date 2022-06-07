<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-type" content="application/json; charset=utf-8" />
<title>Webesmegoldások</title>  
<link rel = "stylesheet" type = "text/css" href = "style.css">  
<style>
.ball {
  display: block;
  width: 200px;
  height: 200px;
  margin: 30px auto 0;
  border-radius:50%;
  box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.2);
}
</style> 
</head>
<body>
<?php      
    include('connection.php'); 
	
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    


        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
	
		$error = 0;
		$select_username = mysqli_query($con, "SELECT * FROM login WHERE username = '".$_POST['user']."'");
		if(mysqli_num_rows($select_username)) {
			$error = 0;
		}	
		else{
			//echo '<script>alert("Ilyen felhasználó nem létezik!")</script>';
			echo "<center>";
			echo '<img src="https://icon-library.com/images/loading-icon-transparent-background/loading-icon-transparent-background-12.jpg" width="32px" height="32px"/>';
			echo "Ilyen felhasználó nem létezik!";
			echo "</center>";
			echo("<script>setTimeout(function(){location.href='https://toxy.hu/Webesmegoldasok/login/'} , 1000);   </script>");
			//echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/">Vissza!</a>';
			$error = 1;
			exit;
		}
		$select_password = mysqli_query($con, "SELECT * FROM login WHERE password = '".$_POST['pass']."'");
		if(mysqli_num_rows($select_password)) {
			$error = 0;
		}	
		else{
			//echo '<script>alert("Hibás jelszó!")</script>';
			$error = 1;
			echo "<center>";
			echo '<img src="https://icon-library.com/images/loading-icon-transparent-background/loading-icon-transparent-background-12.jpg" width="32px" height="32px"/>';
			echo "Hibás jelszó!";
			echo "</center>";
			echo("<script>setTimeout(function(){location.href='https://www.police.hu/'} , 3000);   </script>");
			exit;
		}
		
		
        if($count == 1 && $error == 0){ 
				echo '<center><div class="hatter">';
				echo "<h1>Sikeres bejelentkezés!</h1>";  
				if (isset($_POST['user']) && $_POST['user'] == "katika@gmail.com") {
					echo "Üdvözöllek " . $_POST['user'] . "!";
					if($row['color']=="piros"){
						echo "<br/>Adatbázisban megtalálható színed: ";
						echo $row['color'];
						echo '<div class="ball" style="background-color: #e36d6d;"></div>';
					}
					echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/">Kijelentkezés</a>';
				}
				if (isset($_POST['user']) && $_POST['user'] == "arpi40@freemail.hu") {
					echo "Üdvözöllek " . $_POST['user'] . "!";
					if($row['color']=="zold"){
						echo "<br/>Adatbázisban megtalálható színed: ";
						echo $row['color'];
						echo '<div class="ball" style="background-color: #79db84;"></div>';
					}
					echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/">Kijelentkezés</a>';
				}
				if (isset($_POST['user']) && $_POST['user'] == "zsanettka@hotmail.com") {
					echo "Üdvözöllek " . $_POST['user'] . "!";
					if($row['color']=="sarga"){
						echo "<br/>Adatbázisban megtalálható színed: ";
						echo $row['color'];
						echo '<div class="ball" style="background-color: #e3d96d;"></div>';
					}
					echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/">Kijelentkezés</a>';
				}
				if (isset($_POST['user']) && $_POST['user'] == "hatizsak@protonmail.com") {
					echo "Üdvözöllek " . $_POST['user'] . "!";
					if($row['color']=="kek"){
						echo "<br/>Adatbázisban megtalálható színed: ";
						echo $row['color'];
						echo '<div class="ball" style="background-color: #6da8e3;"></div>';
					}
					echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/">Kijelentkezés</a>';
				}
				if (isset($_POST['user']) && $_POST['user'] == "terpeszterez@citromail.hu") {
					echo "Üdvözöllek " . $_POST['user'] . "!";
					if($row['color']=="fekete"){
						echo "<br/>Adatbázisban megtalálható színed: ";
						echo $row['color'];
						echo '<div class="ball" style="background-color: black;"></div>';
					}
					echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/">Kijelentkezés</a>';
				}
				if (isset($_POST['user']) && $_POST['user'] == "nagysanyi@gmail.hu") {
					echo "Üdvözöllek " . $_POST['user'] . "!";
					if($row['color']=="feher"){
						echo "<br/>Adatbázisban megtalálható színed: ";
						echo $row['color'];
						echo '<div class="ball" style="background-color: white;"></div>';
					}
					echo '<br/><a href="https://toxy.hu/Webesmegoldasok/login/" >Kijelentkezés</a>';
				}
				echo "</div></center>";

		}

?>  
</body>
</html>