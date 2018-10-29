<!DOCTYPE HTML>
<html>
<head>
<title>Inventory Management System</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav>
  <div class="nav-wrapper teal accent-4">
  <a href="https://www.facebook.com/bmsit/" class="brand-logo"><img src ="https://2.bp.blogspot.com/-aaSSumABwyk/VyCmn4CAIOI/AAAAAAAACM8/5KdHMr7VwLgzUNFPbZ0s_8NndM_uCi3pACLcB/s1600/BMSIT%2BLogo.png" width="60" height="60" ></a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
  <li><a href="ash_index.php">Home</a></li>
  <li><a href="tabular.php">Tabular Data</a></li>
  <li><a href="results.php">Results</a></li>
  <li><a href="sales.php">Revenue</a></li>
  <li><a href="form.php">Feedback</a></li>
  </ul>
  </div>
  </nav>

  <br>

  <h4 class="header center blue-grey-text"><b>YOUR FEEDBACK IS VALUABLE TO US <b></h4>
  <hr>

  <div class="card">
<div class="card-content">
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="enter name" id="name"type="text"class="validate">
          <label for="name"></label>
        </div>
</div>
  <div class="row">
  <div class="input-field col s6">
          <input placeholder="enter your comments" id="feedback" type="text" class="validate">
          <label for="feedback"></label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
              <input placeholder="enter your phone number" id="phone" type="tel" class="validate">
              <label for="phone"></label>
            </div>
          </div>

</div>
<button class="btn waves-effect waves-light" type="submit" name="submit" onclick="submitfunc()">Submit
  <i class="material-icons right"></i>
  </button>
<button onclick="location.href = 'ash_index.php';" id="myButton" class="btn waves-effect waves-light" >Return home
<i class="material-icons right"></i>
</button>
</div>
<script>
              function submitfunc() {
                var name= $("#name").val();
                var feedback= $("#feedback").val();
                var phone= $("#phone").val();
                  var formdata= {
                       "name" : name,
                       "feedback" : feedback,
                       "phone" : phone,
                         }
                $.ajax({
                    type: "POST",
                    url: "reply.php",
                    data: formdata,
                    success: function(data) {
                       alert('feedback submitted . Thank you');
                    }
                });
            }
</script>
</body>
</html>
