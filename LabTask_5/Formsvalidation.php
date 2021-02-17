<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";
	$Hobbies="";
	$err_Hobbies="";
	$profession="";
	$err_profession="";
	$bio="";
	$err_bio="";

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
	 {
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["Hobbies"]))
		 {
			 $err_Hobbies="[At least one option must be selected]";
		 }
		 elseif(count($_POST["Hobbies"])<2)
		 {
			 $err_Hobbies="[At least 2 options need to be selected]";
		 }
		 else
		 {
			
			 $Hobbies=$_POST["Hobbies"];
		 }
		 if(!isset($_POST["profession"]))
		 {
			 $err_profession="[This field can not be skipped]";
		 }
		 else
		 {
			 $profession=$_POST["profession"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
         /*if(isset($_POST["submit"]))
         {
            echo "Username: ".$_POST["uname"]."<br>";
            echo "Password: ".$_POST["pass"]."<br>";
            echo "Gender: ".$_POST["gender"]."<br>";
            echo "Profession: ".$_POST["profession"]."<br>";
            echo "Biography: ".$_POST["bio"]."<br>";
            echo "Date: ".$_POST["date"]."<br>";
            echo "E-Mail: ".$_POST["email"]."<br>";
            //echo "Salary: ".$_POST["salary"]."<br>";
            $var = $_POST["Hobbies"];
            echo "Hobbies: ";
            count($var);
            for($i=0;$i<count($var);$i++)
            {
                echo $var[$i].", ";
            }
         }*/
	 }
		?>
<html>
	<head></head>
	<body>
		<h1>User Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hobbies</b></span></td>
					<td>:<input type="checkbox" name="Hobbies[]" value="Movies"><span>Movies</span>
					    <input type="checkbox" name="Hobbies[]" value="Music"><span>Music</span>
						<input type="checkbox" name="Hobbies[]" value="Games"><span>Games</span>
						<input type="checkbox" name="Hobbies[]" value="Sports"><span>Sports</span>
						<span><?php echo "&nbsp  ".$err_Hobbies;?></span></td>
				</tr>
				<tr>
					<td><span><b>Profession</b></span></td>
					<td>: 
						<select name="profession">
							<option disabled selected>Choose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
							<option>others</option>
						</select>
						<span><?php echo "&nbsp".$err_profession;?></span>
					</td>
				</tr>
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="email" name="email"></td>
				</tr>
				<tr>
					<td><span><b>Mobile/Phone</b></span></td>
					<td>:<input type="tel" name="phone_no"></td>
				</tr>
				<tr>
					<td><span><b>Date</b></span></td>
					<td>:<input type="date" name="date"></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>