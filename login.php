<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticketing</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>


<div style=" background-color:#181b5c">
        <div class="container"style="text-align:center; ">
        <br>
        <br>
        <h1 style="color:white; text-align:center;font-family:Arial, Helvetica, sans-serif;font-weight:bold">RAILWAY E-TICKETING</h1>
        <br>
    </div>
</div>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                            <h3 class="text-center text-info">LOGIN</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">E-mail</label><br>
                                <input type="text" name="e_mail" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type" class="text-info">Type</label><br>
                                <select class="form-control" name="type" >
                                    <option val="passenger">
                                        PASSENGER
                                    </option>                     
                                </select>    
                                
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password </label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit"   class="btn btn-info btn-md" value="submit">
                            </div>
                            <div class="form-group" class="text-center">
                                <p href="#" class="text-info">Don't have account? <a href="register.php">Register here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    body {
margin: 0;
padding: 0;
background-color: #17a2b8;
height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 80px;
  max-width: 600px;
  height: 420px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>




<?php
include 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST['email'])){
    
    $sql = "INSERT INTO passenger(email,age,type,gender,phonenumber,address,occupation,password) VALUES ('$_POST[email]','$_POST[age]','$_POST[type]','$_POST[gender]','$_POST[phonenumber]','$_POST[address]','$_POST[occupation]','$_POST[password]')";
    $conn->query($sql);
    }
    

$conn->close();
?>


<?php
$k1=0;
$k=0;
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);

}





if(!empty($_POST["e_mail"]) && !empty($_POST["password"]))
{
    $a=$_POST["e_mail"];
    $b=$_POST["password"];
    
    

        $q1="select * from passenger where email= '$a' ";
                $result = $conn->query($q1);
    
    

if($result !== false && $result->num_rows > 0) 
{
    
    while($result !== false && $row = $result->fetch_assoc()) 
    {
        $k1=1;
        
        if($row["password"]==$b )
        {
            echo "<form  style='visibility:hidden' action='home.php' id='patientpage'><button >submit</button></form><script>document.getElementById('patientpage').submit();</script>";
        }  
        else
        {
            $k=1;
        }
        
    }
}
if($k1!=1 )
{
echo "<script>alert('Acound not found')</script>";
}
else if($k==1)
{
echo "<script>alert('Acound not found')</script>";
}


}
$conn->close();

?>




