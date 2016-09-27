<!DOCTYPE html>
<html>
<head>


	<title> Form Validation</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">

function validate(){
	
	var txt = document.getElementById('fname').value;
	var txt = txt.trim();
	//console.log(txt.length);
	
	if(txt =='' || ! isNaN(parseInt(txt)) || txt.length == 0 ){
		errorMessage = 'First Name can not be left empty or can not be numberic<br>';
	}

	if(txt.length > 8 ){
		errorMessage = 'First Name can not be greater than 8 characters.<br>';
	}

	var txt = document.getElementById('mname').value;
	var txt = txt.trim();
	
	if(txt =='' || ! isNaN(parseInt(txt)) || txt.length == 0 ){
		errorMessage += 'Middle Name can not be left empty or can not be numberic<br>';
	}

	var txt = document.getElementById('lname').value;
	var txt = txt.trim();
	
	if(txt =='' || ! isNaN(parseInt(txt)) || txt.length == 0 ){
		errorMessage += 'Last Name can not be left empty or can not be numberic<br>';
	}

	var txt = document.getElementById('user').value;
	var txt = txt.trim();
	
	if(txt =='' || ! isNaN(parseInt(txt)) || txt.length == 0 ){
		errorMessage += 'User Name can not be left empty or can not be numberic<br>';
	}

	var gender = document.getElementsByName('gender');
	if( !gender[0].checked && !gender[1].checked)
	{
			errorMessage += 'Gender can not be left empty<br>';
	}

	var txt = document.getElementById('email').value;
	var txt = txt.trim();
	if(txt =='' || txt.length == 0 ){
		errorMessage += 'Email can not be left empty<br>';
	}else{
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		 
		 if( !re.test(txt)){
		 	errorMessage +=  'Invalid email address<br>';
		 }
	}

	/*var txt = document.getElementById('country').value;
	var txt = txt.trim();
	
	if(txt =='' || txt.length == 0 ){
		errorMessage += 'Coutnry Name can not be left empty<br>';
	}
*/

	var txt = document.getElementById('address').value;
	var txt = txt.trim();
	
	if(txt =='' || txt.length == 0 ){
		errorMessage += 'Address can not be left empty<br>';
	}

	var txt = document.getElementById('pwd').value;
	var txt = txt.trim();
	
	if(txt =='' || txt.length == 0 ){
		errorMessage += 'Password can not be left empty<br>';
	}

	var txt = document.getElementById('rpwd').value;
	var txt = txt.trim();
	
	if(txt =='' || txt.length == 0 ){
		errorMessage += 'Re-Password can not be left empty<br>';
	}



	 if( errorMessage != '' ){
     	document.getElementById('errormsg').innerHTML = errorMessage;
     	document.getElementById('errormsg').style.display ='block';
     	return false;
     }

	return true;

}

</script>
</head>
<style type="text/css">
.alert{
	display: none;
}	
</style>

<body>
<div class="content">
	<h2>From Validation</h2>

	<div id="errormsg" class="alert alert-danger">
		
	</div>

<form class="form-horizontal" name="myform" role="form" method="post" onsubmit="return validate();">
	  <div class="form-group">
    <label class="control-label col-sm-2" for="fname">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name"><small>Fname can not exceed 8 characters.</small>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="mname">Middle Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name">
    </div>
  </div>

 <div class="form-group">
    <label class="control-label col-sm-2" for="lname">Last Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="user">User Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="user" name="user" placeholder="Enter User Name">
    </div>
  </div>

  

  <div class="form-group">
	  <label class="control-label col-sm-2" for="gender">Gender:</label>
	  <div class="radio">
	    <label><input type="radio" name="gender" value="male"> Male</label>
	    <label><input type="radio" name="gender" value="female"> Female</label>
	  </div>
  </div>


   <div class="form-group">
			<label class="control-label col-sm-2" for="country" id="country">Country:</label>
		<div class="col-sm-8">
		<select  name="country" class="form-control">
			<option value="">-Select-</option>
		<option value="Nepal">Nepal</option>
		<option value="USA">USA</option>
		<option value="australia">Australia</option>
		</select>
	</div>
	</div>

 <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-8">
      <textarea name="adddress" class="form-control" id="address" name="address" placeholder="Enter Address"></textarea> 
    </div>
 </div>

 <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
 </div>

    <div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Password:</label>
		<div class="col-sm-8">
		<input type="password" class="form-control" name="pwd" id="pwd">
	</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="rpassword">Re-Password:</label>
		<div class="col-sm-8">
		<input type="password" class="form-control" name="rpwd" id="rpwd">
	</div>
	</div>


 <div class="form-check">
 	<div class="col-sm-offset-2 col-sm-8">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      I agree term and condition
    </label>
</div>
</div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="clear" class="btn btn-default">Clear</button>
    </div>
  </div>
</form>
</div>
</body>
</html>