

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Bodhi Tree</title>
  
  <?php
  	   include "db_connect.php";
  	   if (isset($_POST['username'])){
  	     $name = $_POST['username'];
         $pw = $_POST['pw'];

         $query = "select * from users WHERE username = '$name' AND password = '$pw'";
         $result = mysqli_query($db, $query)
         or die("Error Querying Database");
         if ($row = mysqli_fetch_array($result))
         {
   		#echo $query;
   		echo '<META http-equiv="refresh" content="0;URL=index.php">';
       }}
?>
  
  
  
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>tree<span class="alternate_colour">_tops</span></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li ><a href="index.php">Home</a></li>
          <li class="tab_selected"><a href="login.php">Login</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li><a href="styles.html">Styles</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="style/panel.jpg" alt="tree tops" /></div>
      
      <div id="content">
        <!-- insert the page content here -->
        
    
        <?php
        if (isset($_POST['username'])) {
        echo "<h2>Incorrect Username/Password</h2>";
        }
        ?>
        
        <h1>Login</h1>
          <form method="post" action="login.php">
    <p>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" size="40" </p>
    <p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="pw" size="40" /></p>

    <p><input type="submit" value="login" name="submit" /></p>
  </form>
  
  <p><a href="createAccount.php">Create Account</p>

       
      </div>


    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy; Company Name. All Rights Reserved. | <a href="http://www.squidfingers.com">pattern from squidfingers</a> | <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a></div>
  </div>
</body>
</html>
