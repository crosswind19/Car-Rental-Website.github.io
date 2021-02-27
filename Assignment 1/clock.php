<html>
<head>
  <title>Unknown Page | clock</title>

  <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body {
  background-color: #f16059;
}
.page {
  width: 80%;
  max-width: 960px;
  margin: 50px auto;
  text-align: center;
  background-color: #f16059;
  border-radius: 5px;
}
body {
  font: 14px/26px 'Bungee', Helvetica, Arial, sans-serif;
  color: #222;
  margin: 0px;
  padding: 0px;
  text-transform: uppercase;
}

h4 {
  font-size: 21px;
  font-family: 'Bungee', cursive;
}
h4 #clock {
  font-size: 36px;
  display: block;
  padding: 5px 0px;
}
h1{
  font-family: 'Bungee Shade', cursive;
  font-size: 48px;
  line-height: 48px;
}

#lolcatImage {
  max-width:30em
}

blockquote {
  font: 2em/1em 'Open Sans', sans-serif;
  -webkit-text-stroke: 1px black;
  text-shadow: 2px 2px #000;
  margin: -80px 0 100px 0;
  color: #fff;
}

blockquote:before { content: '"'; }
blockquote:after { content: '"'; }

#lolcat {
  margin: 0 auto;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 10px;
  border:10px solid #222;
}

#meme {
  background-color: #222;
  width: 300px;
  font-family: 'Bungee', cursive;
  font-size: 18px;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 0;
  margin-top: 20px;
}

  </style>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
  $('#header').load('header.php');
  $("#footer").load("footer.html");
});
</script>
</head>
<body>
  <div id="header"></div>
  <div class="page">
    <header>
      <h1>CLOCK</h1>
    </header>

    <h4>
      I CAN HAZ TIME?? <br>
      <span id="clock">Clock goes here</span>
    </h4>

    <h4>
      Having Stress? Watch Some Memes &#128514;
    </h4>

    <img id="myImage" onclick="changeImage()" src="img/meme1.png" height="600" width="600">
    <p>Click the photo to change memes!</p>

  </div>

  <script type="text/javascript" src="clock.js"></script>
</body>
</html>
