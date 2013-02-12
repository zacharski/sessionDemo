<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>tree_tops template</title>
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
          <li class="tab_selected"><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
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
        <h1>Search</h1>
        <p>For example, you can type 'movies', 'coffee', 'Mexican', or the name of a store like 'Starbucks</p>
          <form method="post" action="index.php">
    <label for="username">Search:</label>
    <input type="text" id="search" name="search" size="40" />
    <input type="submit" value="go" name="submit" />
  </form>

        <h1>Results</h1>
          <?php
  include "db_connect.php";
  if (isset($_POST['search']))
  {
  	$searchterm = $_POST['search'];

  	if ($searchterm == 'movies')
  	{
  		$query = "SELECT * FROM movies ORDER BY movie";
  
  		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
   		echo "<table id=\"hor-minimalist-b\">\n<tr><th>Movie</th><th>Theater</th><tr>\n\n";
   		while($row = mysqli_fetch_array($result)) {
  			$movie = $row['movie'];
  			$theater = $row['theater'];
		  	echo "<tr><td  >$movie</td><td >$theater</td></tr>\n";
	    }
	    echo "</table>\n"; 
  	}
  	else
  	{
  		$query = "SELECT * FROM stores where name LIKE '%$searchterm%' OR type LIKE '%$searchterm' ORDER BY name";
  
  		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
   		echo "<table id=\"hor-minimalist-b\">\n<tr><th>Name</th><th>Type</th><th>Address</th><th>City</th><tr>\n\n";
   		while($row = mysqli_fetch_array($result)) {
  			$name = $row['name'];
  			$type = $row['type'];
  			$address = $row['address'];
  			$city = $row['city'];

		  	echo "<tr><td  >$name</td><td >$type</td><td >$address</td><td >$city</td></tr>\n";
	    }
	    echo "</table>\n"; 
  	}
  	
  }
  ?>
      </div>


    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy; Company Name. All Rights Reserved. | <a href="http://www.squidfingers.com">pattern from squidfingers</a> | <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a></div>
  </div>
</body>
</html>
