<?php
header('Content-Type:text/html;charset=utf-8');
require_once(dirname(__FILE__)."/config.php");
CheckPurview();
if($action=="set")
{
	$v2=$_POST['v'];
	$open=fopen("../data/admin/isapi.txt","w" );
	fwrite($open,$v2);
	fclose($open);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>资源API开关</title>
<link  href="img/admin.css" rel="stylesheet" type="text/css" />
<script src="js/common.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</head>
<body>
<script type="text/JavaScript">if(parent.$('admincpnav')) parent.$('admincpnav').innerHTML='后台首页&nbsp;&raquo;&nbsp;资源发布&nbsp;&raquo;&nbsp;资源API开关';</script>
<div class="r_main">
  <div class="r_content">
    <div class="r_content_1">

<br><br><h3>是否开启资源API插件：</h3><br>
<form action="admin_isapi.php?action=set" method="post">
<?php $v1=file_get_contents("../data/admin/isapi.txt"); ?>
<input type="radio" name="v" value="0" <?php if($v1==0) echo 'checked';?>>关闭
<br>
<input type="radio" name="v" value="1" <?php if($v1==1) echo 'checked';?>>开启
<br><br>
<input type="submit" value="确认" class="btn" >
</form>
<div style="float:left; text-align:left;line-height:26px;">
<br>* 如果修改无效，请检查/data/admin/isapi.txt文件权限是否可写。<br>
* 资源库API访问地址是：http://您的域名/zyapi.php<br>
* 支持发布的信息：影片名称,影片图片地址,影片连载状态,影片语言,影片地区,影片年份,影片备注,影片别名,影片豆瓣评分,影片时光网评分,影片imdb评分,影片上映电视台,影片版本,备用备注信息,影片演员,影片导演,影片简介,总集数,影片时长,影片集数,剧情分类,播放地址,下载地址等信息。
<br><br></div>

		</div>
	</div>
</div>
<?php
viewFoot();
?>
</body>
</html>