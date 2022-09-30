<?php 

session_start();

if (isset($_POST['citizen'])) {
  header("Location: login.php");
}
if (isset($_POST['collector'])) {
  header("Location: collectorLogin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>DIGS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  font-size: 20px;

}


.bgimg {
  background-position:top;
  background-size: cover;
  background-image: url("Garbage1.jpg");
  min-height: 90%;
}

.menu {
  display: none;
}

.bgclr{
  background-color: rgb(228, 228, 228);
}
.menuclr{
  background-color:#ffffff;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black" style="font-size:20px ;">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black"style="font-size:20px ;">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black"style="font-size:20px ;">WASTE SEGRATION</a>
    </div>
    <div class="w3-col s3">
    <form action="" method="POST">
    <button type="submit" name = "citizen" class="w3-button w3-block w3-black"style="font-size:20px;">LOGIN/SIGN UP AS USER</button>
    </form>
    </div>
    <div class="w3-col s3">
    <form action="" method="POST">
    <button type="submit" name = "collector" class="w3-button w3-block w3-black"style="font-size:20px;">LOGIN/SIGN UP AS COLLECTOR</button>
    </form>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="color: blanchedalmond; font-family: 'Black Ops One', cursive;border-width: 3px; border-color: aliceblue;font-size: 120px;">DIGS<br></span>
    <span class="w3-text-white" style = "font-size:30px;font-weight: bold;padding:4px 4px 4px 4px;border: solid 2px blanchedalmond ">Digitalised and Intelligent Garbage System</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="bgclr">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide" >ABOUT</span></h2>
    <p>A waste management system is the strategy an organization uses to dispose, reduce, reuse, and prevent waste.Solid-waste management, the collecting, treating, and disposing of solid material that is discarded because it has served its purpose or is no longer useful. Improper disposal of municipal solid waste can create unsanitary conditions, and these conditions in turn can lead to pollution of the environment and to outbreaks of vector-borne disease—that is, diseases spread by rodents and insects.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"When you refuse to reuse, It’s the Earth you abuse"</i></p>
    </div>
    <img src="wastemanagement.webp" style="width:100%;max-width:1000px" class="w3-margin-top">
    
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h2 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">SEGREGATION OF WASTE</span></h2>
    <div class="menuclr">
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'WET WASTE');" id="myLink">
        <div class="w3-col s6 tablink">WET WASTE</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'DRY WASTE');">
        <div class="w3-col s6 tablink">DRY WASTE</div>
      </a>
    </div>

    <div id="WET WASTE" class="w3-container menu w3-padding-48 w3-card">
      <h4 style="font-weight:bold;">KITCHEN WASTE</h4>
      <p style="color:black">Vegetable/ Fruit Peels</p><br>
      <p style="color:black">Cooked Food/ Leftovers </p><br>
      <p style="color:black">Egg Shells/ Chicken Bones/ Fish Bones</p><br>
      <p style="color:black">Tissue Paper Soiled with Foods</p><br>
      <p style="color:black">Tea Bags/ Coffee Grinds</p><br>
      <p style="color:black">Leaf Plates</p><br>
    
      <h4 style="font-weight:bold;">GARDEN WASTE</h4>
      <p style="color:black">Flowers</p><br>
      <p style="color:black">Plant Trimmings</p><br>
    
    </div>

    <div id="DRY WASTE" class="w3-container menu w3-padding-48 w3-card">
      <h4 style="font-weight:bold;">PLASTIC</h4>
      <p style="color:black">Plastic Covers/ Bottles/ Boxes</p><br>
      <p style="color:black">Chips/ Toffee Wrappers</p><br>
      <p style="color:black">Cups/ Milks/ Curd Packets</p><br>
    
      <h4 style="font-weight:bold;">PAPER</h4>
      <p style="color:black">Newspaper/ Magazines/ Stationary</p><br>
      <p style="color:black">Cardboard Cartons/ Tetra Packs</p><br>
      <p style="color:black">Cup</p><br>
      <p style="color:black">Plates</p><br>
      <p style="color:black">Tissues</p><br>
    
      <h4 style="font-weight:bold;">METAL</h4>
      <p style="color:black">Foils/ Containers/ Metal Cans</p><br>
    
      <h4 style="font-weight:bold;">OTHER DRY WASTE</h4>
      <p style="color:black">Rubber/ Thermacol</p><br>
      <p style="color:black">Mops/ Duster/ Sponges</p><br>
      <p style="color:black">Cosmetics</p><br>
      <p style="color:black">Ceramics</p><br>
      <p style="color:black">Wooden Chips</p><br>
    </div>  
    </div>
    <img src="garbage2.webp" style="width:100%;max-width:1000px;margin-top:32px;">
    <br>
    <br>
    <br>
    
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<div style="background-color:#ffffff ;">
<footer class="w3-center w3-padding-48 w3-large">
  <p>Created by DW Coders</p>
</footer>
</div>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>


