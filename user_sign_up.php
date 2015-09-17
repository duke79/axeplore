<?php 
	$udata=array("name"=>$_POST["name"],
		"email"=>$_POST["email-id"],"password"=>$_POST["password"],
		"ipaddress"=>$_SERVER['REMOTE_ADDR'],"browser"=>$_SERVER['HTTP_USER_AGENT']);

	$udata['password']=sha1($udata['password']);


	$conn=mysqli_connect('localhost','root','','axr');

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO users(name,email,password) VALUES('$udata[name]','$udata[email]','$udata[password]') ON DUPLICATE KEY UPDATE email=email;";

	if (mysqli_query($conn, $sql)) {
		$squery=mysqli_query($conn,"SELECT * FROM users");

		$flag=0;
		while($qdata=mysqli_fetch_array($squery))
		{
			
			if($flag==1)
				{$bgCol="rgb(95, 102, 102)";$flag=0;}
			else
				{$bgCol="rgb(68, 75, 75)";$flag=1;}
			echo "<div style='color:#D6D4D4;background-color:".$bgCol.";padding: 10px 20px;'> <span>".$qdata['name']."</span> <span>".$qdata['email']."</span> <span>".$qdata['password']."</span></div>";
		}

	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>