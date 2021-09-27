<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erste Schritte</title>
    <script src="/js/processing.js"></script>
</head>
<body>
    <div class="wrapper-header">
        <a class="logo-header-link" href="../../../index.html"><img class="logo-header" src="Logo_Portfolio_minimalistic.png"></img></a>
        <h1>
          <a class="link-mk" href="https://michaelkipp.de/processing/01%20erste-schritte.html">Erste Schritte</a>
          <p class="header-desc">Programmieren lernen</p>
        </h1>
      </div>
      <canvas class="a_1_1" data-processing-sources="/a_1_1/a_1_1.pde"></canvas>
</body>
<style>
    *{
        font-family: Nexa_Bold;
        background-color: #1A1A1A;
        color: #FFCC32;
        margin: 0;
        scroll-behavior: smooth;
    }
    @font-face {
        font-family: Nexa_Bold;
        src: url(Nexa_Bold.otf);
    }
    .link-mk{
        font-size: 50px;
        background-color: #FFCC32;
        color: #1A1A1A;
        width: 550px;
        text-decoration: none;
    }
    h1{
        position: absolute;
        font-size: 2.5em;
        background-color: #FFCC32;
        color: #1A1A1A;
        width: 550px;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
      }
    .header-desc{
        color: #1A1A1A;
        background-color: #FFCC32;
        font-size: 0.5em;
      }
    .logo-header {
        position: relative;
        width: 250px;
        height: 250px;
        background-color: transparent;
    }
    .logo-header-link{
        background-color: transparent;
    }
    .wrapper-header{
        position: relative;
        display: flex;
        background-color: #FFCC32;
        margin-bottom: 40px;
        align-items: center;
        height: 200px;
    }
    .a_1_1{
        background-color: #FFFFFF;
        height: min-content;
        width: min-content;
    }
</style>
</html>