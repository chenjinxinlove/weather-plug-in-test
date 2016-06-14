<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css">

</head>
<body>
  <div id="content">
    <div id="con">
        <label>字体颜色</label>
        <select class="con-font-color" name="con-font-color">
            <option value="red">红</option>
            <option value="blue">蓝</option>
        </select>
        <label>字体大小</label>
        <select class="con-font-size" name="con-font-color">
            <option value="14">14</option>
            <option value="9">9</option>
        </select>
    </div>
    <div id="preview">
      <div class="pre-left">
        <div class="pre-cityName">北京</div>
        <img class="pre-img" src="images/shade.png" alt="图片">
        <div class="pre-weather">多云</div>
      </div>
      <div class="pre-rigth">
        <ul>
          <li>31°C</li>
          <li>西北风2级</li>
          <li>湿度27%</li>
          <li>空气<span class="pre-color">良</span></li>
        </ul>
      </div>
    </div>
    <button style="display:block" type="button" name="button" id="button" >获取代码</button>
    <div id="code">
				<textarea name="" rows="5" cols="65" class="text"></textarea>
    </div>
  </div><!-- content -->
  <script src="http://127.0.0.1/weather-plug-in-test/c/3f8fc0061e.js" type="text/javascript" charset="utf-8"></script>
</body>
  <script src="./js/bundle.js"></script>
<!-- <script src="http://localhost:35729/livereload.js?snipver=1"></script> -->
</html>
