<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="ww.png">
    <script src="index.js"></script>
<style>
.connect {
	margin: 5px;
  width: 250px;
  height: 250px
	
}
.connect img {
	width: 20px;
  height: 20px;
}
body {
  height: 200px;
 width: 50%;
  background-image: url("water.png") ;
  background-repeat: no-repeat;
  background-position: right top ;
  background-attachment: fixed;
}
div.water {
  margin: 5px;
  border: 2px solid #ccc;
  width: 250px;
  height: 250px;
}
div.water:hover {
  border: 1px solid DodgerBlue;
}
div.water img {

  width: 160px;
  height: 160px;
}
div.sub {
  color: rgb(0, 94, 167);
  font-family: cursive ;
  text-transform: capitalize;
  font-size: 20px;
  padding: 15px;
  text-align: center;
}
.center {
 color: rgb(10, 3, 118);
 text-align: center;
}
.change {
  font-size: large;
  /*position: fixed;*/
  top: 50px;
  right: 50px;
  background-color: yellow;
}
.night{
/*  background-image: url("bac2.png");
  background-attachment: fixed; */
  background-color: black;

}

.light{
/*  background-image: url("bac.png");
  background-attachment: fixed; */
  background-color: white;
}
#submit {
 background-color: #bbb;
 padding: .5em;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 6px;
 color: #fff;
 font-family: 'Oswald';
 font-size: 20px;
 text-decoration: none;
 border: none;
}
#submit:hover {
 border: none;
 background: orange;
 box-shadow: 0px 0px 1px #777;
}


</style>
</head>
<body>
  <body class="light">
<button onclick="nightMode()" class="change" id="submit">&#9925</button>

<div class="water">
  <a href="fristpage.html">
    <img src="water1.png" alt="water" >
  </a>
  <div class="sub">what will the new world look like?</div>
</div>

<div class="water">
  <a  href="secondpage.html">
    <img src="water2.png" alt="water" >
  </a>
  <div class="sub">what will the new world look like?</div>
</div>

<div class="water">
  <a href="thirdpage.html">
    <img src="water3.png" alt="water" >
  </a>
  <div class="sub">what will the new world look like?</div>
</div>

<div class="connect">
  <a  href="connectus.php">
  <img src="phone-icon-939.png" alt="connect us" >
  CONNECT US
    </a>


</body>
</html
