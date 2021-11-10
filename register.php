<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">REGISTER</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">E-mail</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="age" class="text-info">Age</label><br>
                                <input type="text" name="age" id="age" class="form-control">
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
                                <label for="gender" class="text-info">Gender</label><br>
                                <select class="form-control" name="gender" >
                                    <option val="male">
                                        Male
                                    </option>
                                    <option val="female">
                                        Female
                                    </option>
                                    <option val="others">
                                        Others
                                    </option>
                                </select>    
                                
                            </div>
                            <div class="form-group">
                                <label for="phonenumber" class="text-info">Phone No</label><br>
                                <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address" class="text-info">Address</label><br>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="occupation" class="text-info">Occupation</label><br>
                                <input type="text" name="occupation" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password </label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="rpassword" class="text-info"> Re-type Password </label><br>
                                <input type="text" name="rpassword" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="submit" href="login.php"name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div class="form-group" class="text-center">
                                <p href="#" class="text-info">Already have account? <a href="login.php">Log in here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br><br>
<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 40px;
  max-width: 800px;
  height: 920px;
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