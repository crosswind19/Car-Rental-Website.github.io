<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unknown|Member</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  $(function(){
    $('#header').load('header.php');
    $("#footer").load("footer.html");
  });
  </script>
  <link href="css/membercss.css" rel="stylesheet" />
</head>
<body style="background-image: url(img/wallpaper1.jpg)">
  <!-- <script>
  function disMem(members) {
  // Declare all variables
  var i, tablinks;
  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(members).style.display = "block";
  evt.currentTarget.className += " active";
}
</script> -->
  <div id="header"></div>

 <!-- <div class="tab">
   <a href="member1.html">
   <button class="tablinks" onclick="disMem(member1)"><b><i>Member 1</b></i></button>
   <a href="member2.html">
   <button class="tablinks" onclick="disMem(member2)"><b><i>Member 2</b></i></button>
   <a href="member3.html">
   <button class="tablinks" onclick="disMem(member3)"><b><i>Member 3</b></i></button>
   <a href="member4.html">
   <button class="tablinks" onclick="disMem(member4)"><b><i>Member 4</b></i></button>
   <a href="member5.html">
   <button class="tablinks" onclick="disMem(member5)"><b><i>Member 5</b></i></button>
   <a href="index.html">
   <button class="tablinks" onclick="disMem(member5)"><b><i>Return</b></i></button>
 </div> -->
<br>

<br>
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h1 class="text-center">Meet our team</h1>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" data-bs-hover-animate="pulse" src="https://i.imgur.com/nAcoHRf.jpg">
                    <h3 class="name">Boris Simga</h3>
                    <p class="title">Designer</p>
                    <p class="description"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br><br></p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" data-bs-hover-animate="pulse" src="https://i.imgur.com/xELPaag.jpg">
                    <h3 class="name">Andy row</h3>
                    <p class="title">Graphics designer</p>
                    <p class="description"><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat ismal<br><br></p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" data-bs-hover-animate="pulse" src="https://i.imgur.com/HjKTNkG.jpg">
                    <h3 class="name">Charles m.</h3>
                    <p class="title">Developer</p>
                    <p class="description"><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id<br><br></p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</body>
</html>
