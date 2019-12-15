<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>A Frankenstein Atlas</b></a>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right">
      <div class="topnav" id="myTopnav">
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        <a href="essays.html" class="w3-bar-item w3-button">Essays</a>
        <a href="pedagogy.html" class="w3-bar-item w3-button">Teaching</a>
        <a href="methods.html" class="w3-bar-item w3-button">Methods</a>
        <a href="maps.html" class="w3-bar-item w3-button">Maps</a>
        <a href="data.html" class="w3-bar-item w3-button">Data</a>
        <a href="bibliography.html" class="w3-bar-item w3-button">Bibliography</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
    </div>
  </div>
</div>

<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>

</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://6500jmk4.github.io/afrankensteinatlas/Images/matterhorn_and_dent_dHerens-wikimedia-1500x800.jpg" alt="Matterhorn" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min w3-hide-small"><b>A FRANKENSTEIN ATLAS</b></span></h1> 
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-hide-small w3-text-light-grey">EDITED BY JASON M. KELLY</span></h1>
  </div>
</header>


</body>
</html>


