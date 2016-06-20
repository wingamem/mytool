<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <!--
        Zoom Template 
        http://www.templatemo.com/tm-414-zoom
        -->
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
        <meta name="viewport" content="width=device-width">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/templatemo_main.css">
		<style>.walk {
  width: 125px;
  height: 150px;
  background: url(xxxasddbgfbwalk.png) left;
  -webkit-animation:anima 3s steps(16) infinite ;
}

@-webkit-keyframes anima{
    from { background-position:2000px 0;}
    to {background-position:0px 0;}
}</style>
		<script language="javascript">
function saveUserInfo()
{
//获取接受返回信息层
var msg = document.getElementById("m");

//获取表单对象和用户信息值
var f = document.chat;
var userName = f.input_text.value;
//接收表单的URL地址
var url = "tuling.php";
//需要POST的值，把每个变量都通过&来联接
var postStr   = "input_text="+ userName;
//实例化Ajax
//var ajax = InitAjax();
          var ajax = false;
         //开始初始化XMLHttpRequest对象
         if(window.XMLHttpRequest) { //Mozilla 浏览器
                 ajax = new XMLHttpRequest();
                 if (ajax.overrideMimeType) {//设置MiME类别
                         ajax.overrideMimeType("text/xml");
                 }
         }
         else if (window.ActiveXObject) { // IE浏览器
                 try {
                         ajax = new ActiveXObject("Msxml2.XMLHTTP");
                 } catch (e) {
                         try {
                                 ajax = new ActiveXObject("Microsoft.XMLHTTP");
                         } catch (e) {}
                 }
         }
         if (!ajax) { // 异常，创建对象实例失败
                 window.alert("不能创建XMLHttpRequest对象实例.");
                 return false;
         }
//通过Post方式打开连接
ajax.open("POST", url, true);

//定义传输的文件HTTP头信息
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

//发送POST数据
ajax.send(postStr);

//获取执行状态
ajax.onreadystatechange = function() { 
   //如果执行状态成功，那么就把返回信息写到指定的层里
   if (ajax.readyState == 4 && ajax.status == 200) { 
    msg.innerHTML = ajax.responseText; 
   } 
}
}
</script>
    </head>
    <body>
        <div id="main-wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center templatemo-logo margin-top-20">
                <h1 class="templatemo-site-title">
                    <a href="https://github.com/wingamem/mytool">我的工具箱</a>
                </h1>
                <h3 class="templatemo-site-title">
                	by <a href="https://github.com/wingamem"><span class="blue">GitHub</span><span class="green">@wingamem</span></a>
                </h3>
            </div>

            <div class="image-section">
                <div class="image-container">
                    <img src="../images/zoom-bg-1.jpg" id="menu-img" class="main-img inactive">
                </div>
            </div>
			
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 ">
				<div class="walk"></div>
				<br/><br/><br/>
				<div id="m" class="templatemo-site-title"></div>
                        
                    </div><!-- /.templatemo-content -->  
                </div><!-- /.templatemo-content-wrapper --> 
				
            </div><div class="container">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 templatemo-content-wrapper">
                    <div class="templatemo-content">
                        
                        <section id="menu-section" class="active">
                                    </div>
									<form name="chat" method="post" action="">
									<div class="form-group"><input type="text" name="input_text" class="form-control" placeholder="请文明聊天"/></div>
									<input class="btn btn-primary" name="reset" type="reset" value="清空" id="width_2">
									<input class="btn btn-primary" type="button" value="发送" onClick="saveUserInfo();">
									</form>
									<div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
                                    <a href="../">
                                        <div class="black-bg btn-menu">
                                            <h2>返回首页</h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </section>
                        
                    </div><!-- /.templatemo-content -->  
                </div><!-- /.templatemo-content-wrapper --> 
            </div><!-- /.row --> 

		</div><!-- /#main-wrapper -->
        <!--<div id="preloader">
            <div id="status">&nbsp;正在加载...</div>
        </div>-->
        
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery-ui.min.js"></script>
        <script src="../js/jquery.backstretch.min.js"></script>
        <script src="../js/templatemo_script.js"></script>

    </body> 
</html>