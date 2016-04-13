<!DOCTYPE html>
<html>
<!-- <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head> -->
<body>
<!-- 
<div data-role="page">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>

  <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left">Show Popup Form</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
      <form method="post" action="demoform.asp">
        <div>
          <h3>Login information</h3>
          <label for="usrnm" class="ui-hidden-accessible">Username:</label>
          <input type="text" name="user" id="usrnm" placeholder="Username">
          <label for="pswd" class="ui-hidden-accessible">Password:</label>
          <input type="password" name="passw" id="pswd" placeholder="Password">
          <label for="log">Keep me logged in</label>
          <input type="checkbox" name="login" id="log" value="1" data-mini="true">
          <input type="submit" data-inline="true" value="Log in">
        </div>
      </form>
    </div>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div>  -->

<link rel="stylesheet" href="{{ asset('css/ceva.css') }}" />
   <div class="calendar">
    <h1>Your calendar would be here</h1>
    <button id="popupButton">13.05.2015</button>
</div>
<div class="popup">
    <h2>13.05.2015</h2>
    Activity: 
    <form action="site.php" method="post">
        <select id="activity">
            <option class="placeholder" selected disabled>Select</option>
            <option>work</option>
            <option>youth leave</option>
        </select>
    </form> 
</div>
<div class="popup">
    <h3>Work 13.05.2015</h3>
    this will be the work popup
</div>
<div class="popup">
    <h3>Youth leave 13.05.2015</h3>
    this will be the youth leave popup
</div>
<script type="text/javascript">
      document.getElementById("popupButton").onclick = function() {
    document.getElementsByClassName("popup")[0].style.display = "block"    
    }
    document.getElementById("activity").onchange = function() {
    document.getElementsByClassName("popup")[0].style.display = "none" 
   var selectedValue = this.options[this.selectedIndex].innerHTML;
    if (selectedValue == "work") {
        document.getElementsByClassName("popup")[1].style.display = "block";       
    }
    if (selectedValue == "youth leave") {
         document.getElementsByClassName("popup")[2].style.display = "block";       
    }
  }
</script>

</body>
</html>
