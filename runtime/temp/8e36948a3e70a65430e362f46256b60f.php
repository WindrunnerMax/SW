<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"/www/wwwroot/www.yike.com/app/index/view/sw/classroom.html";i:1551778920;s:57:"/www/wwwroot/www.yike.com/app/index/view/common/view.html";i:1554876742;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >
<title>Query</title>

<link href="<?php echo $ctx; ?>/public/static/js/layui/css/layui.css" rel="stylesheet">
<link href="<?php echo $ctx; ?>/public/static/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $ctx; ?>/public/static/css/styles.css" rel="stylesheet">

<script src="<?php echo $ctx; ?>/public/static/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $ctx; ?>/public/static/js/bootstrap.min.js"></script>
<script src="<?php echo $ctx; ?>/public/static/js/layui/layui.js"></script>
<script src="<?php echo $ctx; ?>/public/static/js/vue.min.js"></script>
</head>
<style type="text/css">
  fieldset{padding:.3em .30em .10em;margin:0 2px;border:1px solid silver}
  legend{padding:10px;border:0;width:auto;margin-bottom:0px;}
</style>
<script type="text/javascript">
    var ctx = "<?php echo $ctx; ?>";
    var user = "<?php echo $user; ?>";
</script>
<body>

  <div>
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-body" style='position:relative;'>
          用户：<?php echo $user; ?>
          <div class="layui-btn layui-btn-primary layui-btn-xs" style="padding: 0 11px;font-size: 12px;margin-top: -1px;position: absolute;right: 120px;" onclick="location.href='<?php echo $ctx; ?>/adapt/sw/overview'">标准</div>
          <div class="layui-btn layui-btn-primary layui-btn-xs" style="padding: 0 11px;font-size: 12px;margin-top: -1px;position: absolute;right: 65px;" onclick="location.href='<?php echo $ctx; ?>/index/sw/overview'">菜单</div>
          <div class="layui-btn layui-btn-primary layui-btn-xs" style="padding: 0 11px;font-size: 12px;margin-top: -1px;position: absolute;right: 10px;" onclick="location.href='<?php echo $ctx; ?>/?status=E'">注销</div>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row --> 

  <div>
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
教室
</div>
        <div class="panel-body">
          
<center>
  <a href="/classroom/allday" class="layui-btn layui-btn-normal">全天</a>
  <a href="/classroom/am" class="layui-btn layui-btn-normal">上午</a>
  <a href="/classroom/pm" class="layui-btn layui-btn-normal">下午</a>
  </center>
  <br>
  <center>
  <a href="/classroom/night" class="layui-btn layui-btn-normal">晚上</a>
  <a href="/classroom/0102" class="layui-btn layui-btn-normal">12节</a>
  <a href="/classroom/0304" class="layui-btn layui-btn-normal">34节</a>
  </center>
  <br>
  <center>
  <a href="/classroom/0506" class="layui-btn layui-btn-normal">56节</a>
  <a href="/classroom/0708" class="layui-btn layui-btn-normal">78节</a>
  <a href="/classroom/0910" class="layui-btn layui-btn-normal">9X节</a>
</center>
<br>
<style type="text/css">
  .info{
    margin-left:3px; 
  }
  .info2{
    margin-left:7px; 
  }
</style>

<hr class="layui-bg-gray">
<?php foreach ($info as $value) { ?>
  <center class="info"><?php echo $value['jxl']; ?></center>
  <hr class="layui-bg-gray">
  <?php foreach ($value['jsList'] as $value2) { ?>
    <div class="info2"><?php echo $value2['jsmc']; ?>(<?php echo $value2['zws']; ?>座)</div>
    <hr class="layui-bg-gray">
  <?php } } ?>


        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  

  <script>
    !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){      
        $(this).find('em:first').toggleClass("glyphicon-minus");    
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script> 
  <script type="text/javascript">
  function errmsg(msg,b={},width="200px"){
      layui.use('layer', function(){
            var layer=layui.layer;
            b.icon = 5;
            b.area = width;
            layer.msg(msg,b);
    })
  }
  function sucmsg(msg,b={},width="200px"){
      layui.use('layer', function(){
            var layer=layui.layer;
            b.icon = 6;
            b.area = width;
            layer.msg(msg,b);
    })
  }
  function loadmsg() {
    layui.use('layer', function(){
          var layer = layui.layer;
          layer.msg('请稍后', {
                  icon: 16
                  ,shade: 0.01
                  ,area: ['160px', '70px']
          });
    })   
  }
</script>
</body>
</html>

