<!DOCTYPE html>

<html>

    <head>

        <title>Registration Form </title>
        
        
       <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	    <style>.row{margin:10px;} *{font-family:garamond;font-weight:bold;}.col-4{text-align:left;}</style>
    </head>

    <body style="background-color:#f08080;">
         
        <form action="form.php" method="post">
	<h1><u>Registration Form</u></h1><br><br>
	<div id="box" style="width:100vh;border:2px solid black;">
	<div class="container">
	
	<div class="row">
       	<div class="col-4">FirstName:</div><div class="col-6"> <input type="text" name="fname" ></div>
	</div>
	<div class="row">
       	<div class="col-4">Last Name: </div><div class="col-6"><input type="text" name="lname" ></div>
	</div>
	<div class="row">
      	<div class="col-4">Address: </div><div class="col-6"><input type="text" name="Address" ></div>
	</div>
	<div class="row">
	<div class="col-4">DOB:</div><div class="col-6"> <input type="text" name="age"></div>
	</div>
	<div class="row">
	<div class="col-4">Gender:</div>
	<div class="col-6">
	<input type="radio" name="gender" value="female" >female
	<input type="radio" name="gender" value="male">male
	</div>
	</div>
	<div class="row">
	<div class="col-4">Martial Status:</div>
	<div class="col-6">
	<input type="radio" name="marital_status" value="Married" >Married
	<input type="radio" name="marital_status" value="single">single
	</div>
	</div>
	<div class="row">
	<div class="col-4">email:</div><div class="col-6"> <input type="text" name="email" ></div>
	</div>
	<div class="row">
	<div class="col-4">PassWord: </div><div class="col-6"><input type="password" name="password"></div>
	</div>
 	<div class="row">         
	<div class="col-4">Confrim PassWord: </div><div class="col-6"><input type="password" name="confirm_password"></div>
	</div>
            <input type="submit"  value="Register" style="background:green">
            <input type="submit"  value="Cancel" style="background:orange">
            
            
            </div></div>
        </form>
    </body>

</html>
