<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>404 - Back to the Future - CodePen</title>

    <link rel="stylesheet" href="/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div id="container">
      <div class="deloreanblue" data-bind="attr: { style:'-webkit-transform:perspective(1000px) rotateY(' + relativeMouse.x() + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(0px) rotateY(' + relativeMouse.x() + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }">
        <div class="deloreanred"></div>
      </div>
</div>   

<div class="text-container">
    <h1>404</h1>
    <p>I guess you aren't ready for that page yet...<br /> but your kids are gonna' love it.</p>

    <div class="back">
      Back
    </div>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/127764/knockout-3.1.0.js'></script>

  <script src="/js/index.js"></script>

</body>

</html>