<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://use.fontawesome.com/0ca171ef87.js"></script>
    <style>
      body, input {
        font-family: Roboto, Arial, sans-serif;
        font-size: 15px;
      }
      .wrapper {
        height: 100%;
        overflow: hidden;
      }
      #a {
        width: 25%;
        float: left;
        overflow-y: auto;
        height: 100%;
      }
      .ab {
        background: #4285F4;
        color: #fff;
        padding: 15px;
      }
      .aa {
        padding: 15px;
      }
      .aaa {
        margin-bottom: 15px;
      }
      .aaa span {
        font-weight: bold;
      }
      input[type="text"], button {
        width: 100%;
        border: 0;
        line-height: 24px;
        background: #fff;
        padding: 10px 0 8px;
        border-radius: 30px;
        text-align: center;
      }
      #map {
        height: 100%;
        width: 75%;
        float: left;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #content img {
        width: 400px !important;
      }
      .a {
        font-size: 19px !important;
        line-height: 22px !important;
      }
      .b {
        font-size: 15px !important;
        line-height: 18px !important;
      }

      button.a {
        width: auto;
        padding: 16px 25px 14px;
        border-radius: 30px;
      }
      body {
        background: url(traveller.jpg);
        background-size: cover;
        position: relative;
      }
      .aaaa {
        background: #4285F4;
        color: #fff;
        padding: 15px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
      }
      .aaaaa {
        background: rgba(66, 133, 244, .5);
        color: #fff;
        padding: 15px;
        position: absolute;
        top: 40%;
        left: 50%;
        width: 500px;
        margin-left: -250px;
      }
      .wer {
        float: left;
        width: 45%;
        margin-right: 5%;
      }
      .tit {
        position: absolute;
        top: 24%;
        left: 0;
        text-align: center;
        width: 100%;
        font-size: 60px;
        color: rgba(0, 0, 0, .7);
      }
      .tit2 {
        font-size: 20px;
      }
      .rr {
        float: left;
        width: 25%;
        text-align: center;
        /*padding: 16px 25px 14px;*/
      }
      .rrr {
        border-radius: 100%;
        background: #fff;
        color: #000;
        width: 100px;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
      }
      .rr i {
        font-size: 200%;
        margin-bottom: 10px;
      }
      .r1 i {
        margin-top: 10px;
      }
      .r2 i {
        margin-top: 15px;
      }
      .clearfix {
        clear: both;
      }
    </style>
  </head>
  <body>
    <div class="tit">Work your way<div class="tit2">More than travelling</div></div>
    <?php if($_GET["loggedin"]): ?>
    <div class="aaaa"><i class="fa fa-facebook-official" aria-hidden="true"></i> Welcome back, John! &nbsp;&nbsp; Logout
    </div>
    <?php else: ?>
    <div class="aaaa">Register &nbsp;&nbsp; Login &nbsp;&nbsp; <i class="fa fa-facebook-official" aria-hidden="true"></i> <a style="color: #fff; text-decoration: none;" href="?loggedin=1">Connect with Facebook</a> &nbsp;&nbsp; <i class="fa fa-linkedin" aria-hidden="true"></i> Connect with LinkedIn
      <!--<i class="fa fa-facebook-official" aria-hidden="true"></i> Welcome back, John!-->
    </div>
    <?php endif; ?>
    </div>
    <div class="aaaaa">
        <div style="_margin-top: 15px;">
          <div class="wer"><input type="text" name="start" value="" placeholder="Start destination" /></div>
          <div class="wer"><input type="text" name="end" value="" placeholder="End destination" /></div>
        </div>
        <div class="clearfix"></div>
        <div style="margin-top: 5px;">
          <div class="wer"><input type="text" name="on" value="20.04.2018" /></div>
          <div class="wer"><input type="text" name="days" value="21 days" /></div>
        </div>
        <div class="clearfix"></div>
        <div style="margin-top: 10px;">
          <div style="margin-bottom: 10px; text-align: center; font-size: 120%;"><strong>Job Categories</strong></div>
          <div class="rr"><div class="rrr r1"><i class="fa fa-wrench" aria-hidden="true"></i><br/>Crafts manship</div></div>
          <div class="rr"><div class="rrr r2"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><br/>Office</div></div>
          <div class="rr"><div class="rrr r2"><i class="fa fa-cutlery" aria-hidden="true"></i><br/>Gastronomy</div></div>
          <div class="rr"><div class="rrr r2"><i class="fa fa-arrow-right" aria-hidden="true"></i><br/>More</div></div>
        </div>
        <div class="clearfix"></div>
        <div style="margin-top: 20px; text-align: center;">
          <form method="get" action="page2.php">
            <button class="a" style="cursor: pointer;">Plan your work trip!</button>
          </form>
        </div>
    </div>
  </body>
</html>
