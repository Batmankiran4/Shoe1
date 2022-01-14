
 <!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="shoe()" style="color: white;font-size: 18px;">SHOE</button>
				<button type="button" class="toggle-btn1" onclick="motors()" style="color: white;font-size: 18px;">MOTOR</button>

				
			</div>
			<form class="input-group" id="shoe" method="post" action="login1.php">
				<label style="color: white;font-size: 26px;">Email</label>
			 <input type="text" name="email"  required="" class="input-field" ><br>
			 <label style="color: white;font-size: 26px;">PassWord</label>
	         <input type="password" name="password" required="" class="input-field" ><br>

	         
	         <!-- <input type="radio" name="role" value="admin" required=""><br>  
	         <input type="radio" name="role" value="oparetor" required=""><br>
 -->


          <div class="wrapper">
 
                 <input type="radio" name="role" value="admin" id="option-1" required="" checked>
                 <input type="radio" name="role" value="oparetor" id="option-2" required=""><br>
                 <label for="option-1" class="option option-1">
                 <div class="dot"></div>
                 <span>Admin</span>
                 </label>
                 <label for="option-2" class="option option-2">
                 <div class="dot"></div>
                 <span>Oparetor</span>
                 </label>
           </div>



               
	            <input type="submit" class="submit-btn" name="submit" value="LOGIN"><br>
				
			</form>

			<form class="input-group" id="motors" method="post" action="motorslogin.php">
				<label style="color: white;font-size: 26px;">Email</label>
				<input type="text" name="email"  required="" class="input-field" ><br>
				 <label style="color: white;font-size: 26px;">PassWord</label>				 
	         <input type="password" name="password" required="" class="input-field" ><br>

           

	                    <div class="wrapper1">
 
  <input type="radio" name="post" value="admin" id="option-3" required="" checked>
  <input type="radio" name="post" value="oparetor" id="option-4" required=""><br>
   <label for="option-3" class="option option-3">
     <div class="dot"></div>
      <span>Admin</span>
      </label>
   <label for="option-4" class="option option-4">
     <div class="dot"></div>
      <span>Oparetor</span>
   </label>
</div>


	            <input type="submit" class="submit-btn"  name="submit" value="LOGIN" style=""><br>
				<!-- <button type="button" class="submit-btn">LOG IN</button> -->
				
			</form>

			
		</div>
		


	</div>

	<script>
		var x=document.getElementById("shoe");
		var y=document.getElementById("motors");
		var z=document.getElementById("btn");

		function motors()
		 {
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}


		function shoe()
		 {
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";

			
		}
	</script>

</body>
</html>
