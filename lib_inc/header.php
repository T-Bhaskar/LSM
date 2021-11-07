<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    overflow:hidden;
  background-color: blue;
  height:auto;
  
  
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
  font-size: 17px;
  border-radius:5px;
  margin-top:5px;
  margin-bottom:5px;
}

.topnav a:hover {
  background-color: red;
  color: #fff;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}
@media screen and (max-width: 900px) {
  .topnav a{
    font-size: 14px;
    font-weight : 10px;
    padding: 7px 9px;
  }
}

@media screen and (max-width: 800px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
    font-size: 17px;
  }
}

@media screen and (max-width: 800px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contect us</a>
  <a href="#toper">Toper us</a>
   <a href="#toper">Login & Signup</a>
    <a href="#toper">Homework</a>
     <a href="#toper">Examination</a>
      <a href="#toper">Attendance</a>
       <a href="#toper">Fees Management</a>
        <a href="#toper">Privacy Policy</a>
         
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
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

</body>
</html>
