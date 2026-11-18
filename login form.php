<!Doctype html>
<html>
<head>
        <title>LOGIN FORM</title>
</head>
      <h1>STUDENT LOGIN FORM<h1>
        <form method="POST" ACTION="">
            Enter Your UserName:
          <input type="Name" name="name" required>
           <br><br>
           Enter your Password:
           <input type="password" name="password" required>
           <br><br>
           <input type="submit" name="submit" value="Login">    
</form>
    <?php  
if (isset ($_POST['submit']))
    {
    $Username=$_POST['Username'];
    $password=$_post['password'];
    }
if($Username=="Rahul" && $password=="12345")
{
    echo "Login Successful";
}
else
{
    echo "Login Failed";
}
?>