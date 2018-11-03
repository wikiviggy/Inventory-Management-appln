<!doctype html>
<html>
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>
<div class="container">
<nav>
    <div class="nav-wrapper teal accent-4">
      <a href="https://www.facebook.com/bmsit/" class="brand-logo"><img src ="https://2.bp.blogspot.com/-aaSSumABwyk/VyCmn4CAIOI/AAAAAAAACM8/5KdHMr7VwLgzUNFPbZ0s_8NndM_uCi3pACLcB/s1600/BMSIT%2BLogo.png" width="60" height="60" ></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="dashboard.php">Catalog</a></li>
        <li><a href="ash_index.php">Home</a></li>
        <li><a href="results.php">Results</a></li>
        <li><a href="sales.php">Revenue</a></li>
        <li><a href="form.php">Feedback</a></li>
      </ul>
    </div>
  </nav>
  <br>

  <h4 class="header center blue-grey-text"><b> Remove a  Product from I.M.S. <b></h4>
  <hr>
<div class="card">
<div class="card-content">
  <form action ="drop.php" method="POST">

    Enter product Name:<input type="text" name="name">
    <br>
    <br>
    <input type="submit" value="submit">
    <br>
    <br>
  </form>
<button onclick="location.href = 'dashboard.php';" id="myButton" class="btn waves-effect waves-light" >Return to Dashboard
<i class="material-icons right"></i>
</button>
</div>
  </div>
</div>
  </div>
</div>
</body>
</html>
