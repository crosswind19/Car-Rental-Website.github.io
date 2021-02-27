<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel= "stylesheet" type="text/css" href="calculator/calculator.css">
  <link href="https://fonts.googleapis.com/css?
  family=Open+Sanss:600,700" rel="stylesheet"></link>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

  <script>
  $(function(){
    $('#header').load('header.php');
    $("#footer").load("footer.html");
  });
  </script>

  <title>Unknown Page | Calculator</title>
</head>
<body>
  <div id="header"></div>

<h2>Having Problem Giving Tips? Let us calculate for you!</h2>

  <div id="container">
  <h1>Tip Calculator</h1>
  <div id="calculator">


    <form>
      <p>How much was your bill?
        <p>
          $ <input id="billamt" type="text" placeholder="Bill Amount">

          <p>How was your service?
            <p>
              <select id="serviceQual">
            <option disabled selected value="0">-- Choose an Option --</option>
            <option value="0.1">Outstanding</option>
            <option value="0.05">Good</option>
            <option value="0.02">It was OK</option>
        </select>
    </form>
    <p>How many people are sharing the bill?</p>
    <input id="peopleamt" type="text" placeholder="Number of People"> people
    <button type="button" id="calculate">Calculate!</button>

  </div>
  <!--calculator end-->
  <div id="totalTip">
    <sup>$</sup><span id="tip">0.00</span>
    <small id="each">each</small>
  </div>
  <!--totalTip end-->

</div>
<!--container end-->

<script type="text/javascript" src="calculator/script.js"></script>

</body>
</html>
