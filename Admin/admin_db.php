<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$user = $_POST["adminid"];
	$pwd = $_POST["password"];

    		if($user=="admin" && $pwd=="admin@123")
    		{
    			header("Location: admin_view.php");
    		}
    	
?>
</body>
</html>