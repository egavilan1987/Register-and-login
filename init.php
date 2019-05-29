<!DOCTYPE html>
<html>
	<head>
		<title>Simple PHP Login and Register System</title>		
	</head>  
<body>
	<ul>
	  <a href="signin.php">Sign in</a>&nbsp; 
	  <a href="#">Sign up</a>&nbsp;
	</ul>
	<br><br>
	<form method='post' action='addProducts.php'>
      <table width='500' border='3' align='center'>
          <tr>
              <th bgcolor='dodgerBlue' colspan='2'>Registration Form</th>
          </tr>
          <tr>
              <td align='right'>First Name:</td>
              <td><input type='text' name='firstname' maxlength="50" required >
              </td>
          </tr>
          <tr>
              <td align='right'>Last Name:</td>
              <td><input type='text' name='lastname' maxlength="50" required >
              </td>
          </tr>
          <tr>
              <td align='right'>Email :</td>
              <td><input type='email' name='email' maxlength="50" required>
              </td>
          </tr>
          <tr>
              <td align='right'>Username: </td>
              <td><input type='username' name='username' maxlength="50" required>
              </td>
          </tr>
          <tr>
              <td align='right'>Password: </td>
              <td><input type='password' name='password' maxlength="50" required>
              </td>
          </tr>
          <tr>
              <td align='right'>Gender: </td>
              <td>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other  
              </td>
          </tr>
          <tr>
              <td align='right'>Birthday: </td>
              <td><input type='date' name='birthday' required>
              </td>
          </tr>
          <tr>
              <td align='center' colspan='2'>
              <input type='submit' name='submit' value='Submit'>
              </td>
          </tr>  
       </table>  
	</form>
</body>

</html>
