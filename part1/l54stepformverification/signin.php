
<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link href="./loginstyle.css" rel="stylesheet" type="text/css" />
	</head>
	<body>


       <div class="container">

		   <div id="dotbox" class="dotbox">
               <span class="dot"></span>
		   </div>

		   <form id="form" action="./loginfunction.php" method="POST"  >
			   <h1>Login With Us</h1>

			   <div class="page">
				   <label for="email">Security :</label>
				   <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"  />
				   <input type="password" name="password" id="password" class="form-control" placeholder="Enter Passcode"  />
			   </div>


				 <div class="d-flex">
					<button type="submit" name="submit" id="submit">Login</button>	
                </div>
                
                
                <p>You don't have account ? <a href="./signup.php">Signup Here !!!</a></p>

			</form>

          


	   </div>

	</body>
</html>

<!-- 
newsletter
TINYINT
1

documents
VARCHAR(50)
NULL 
-->