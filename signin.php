<!DOCTYPE html>
<html>
	<head>
		<title>Simple PHP Login and Register System</title>		
	</head>  
<body>
	<ul>
	  <a href="#">Sign in</a>&nbsp; 
	  <a href="signup">Sign up</a>&nbsp;
	</ul>
	<br><br>
	<form method='post' action='signin.php'>
      <table width='400' border='3' align='center'>
          <tr>
              <th bgcolor='dodgerBlue' colspan='2'>Sign in</th>
          </tr>
          <tr >
              <td align='right'>User name:</td>
              <td><input type='text' name='name' maxlength="50" required>
              </td>
          </tr>
          <tr>
              <td align='right'>Password:</td>
              <td><input type='text' name='description' maxlength="500" required>
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
