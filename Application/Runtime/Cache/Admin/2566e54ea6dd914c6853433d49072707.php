<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	   <title>用户反馈数据录入</title>
	   <link rel="stylesheet" href="/screen/Public/Admin/css/bootstrap.css">
     <link rel="stylesheet" href="/screen/Public/Admin/css/main.css">
	   <script src="/screen/Public/Home/js/jquery-1.10.1.min.js" type="text/javascript" charset="utf-8" ></script>
     <link href="/screen/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" charset="utf-8" src="/screen/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/screen/Public/datetimepicker/datepicker-zh_cn.js"></script>
    <link rel="stylesheet" media="all" type="text/css" href="/screen/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
    <script type="text/javascript" src="/screen/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
    <script type="text/javascript" src="/screen/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
</head>
<body id="skin-blur-blue">
   <div class='wrap'>
      <h3 class='wtitle'>用户反馈数据录入</h3>
    	<form role="form" method="post" class='form-horizontal'>
            <div class="form-group">
              <label for="name">业务类型</label>
              <select name='fid'>
                     <option value=''>--请选择--</option>
                     <option value='1'>预选号码</option>
                     <option value='2'>考试预约</option>
                     <option value='3'>违法处理</option>
                     <option value='4'>机车业务</option>
                     <option value='5'>驾驶证业务</option>
                     <option value='6'>系统反馈</option>
                     <option value='7'>其他意见</option>
               </select>
           </div>
           <div class="form-group">
              <label for="name">反馈类型</label>
              <select name='ftype'>
                     <option value=''>--请选择--</option>
                     <option value='已回复'>已回复</option>
                     <option value='未回复'>未回复</option>
               </select>
           </div>
      	   <div class="form-group">
      	      <label for="name" class='control-label'>数量</label>
      	      <input type="text" name='data' placeholder="请输入数据量"/>
      	   </div>
          <div class="form-group">
              <label for="name" class='control-label'>日期</label>
              <input type="text" name='date' id='st' placeholder="请输入具体的日期"/>
           </div>
           <div id="wsubmit">
      	   <button type="submit" class="btn btn-success" id='submit'>提交</button> <button type="submit" class="btn btn-info">重置</button>
           </div>
    	</form>
</div>
</body>
</html>

<script type="text/javascript" charset="utf-8">
  $.timepicker.setDefaults($.timepicker.regional['zh-CN']);
  $("#st").datepicker({ dateFormat: "yy-mm-dd" });
</script>