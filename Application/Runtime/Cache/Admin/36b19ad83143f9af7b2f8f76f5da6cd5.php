<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	   <title>员工工作数据录入</title>
	   <link rel="stylesheet" href="/screen/Public/Admin/css/bootstrap.css">
	   <link rel="stylesheet" href="/screen/Public/Admin/css/main.css">
	   <script src="/screen/Public/Admin/js/jquery-1.4.4.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body id='skin-city'>
   <div  id='wform'>
	<form role="form" method="post" class='form-horizontal'>
	   <div class="form-group">
	      <h4 class='wtitle'>员工工作数据录入</h4>
	      <label for="name">员工姓名</label>
		  <select  name='wname' id="wname">
		         <option>--请选择--</option>
		         <?php foreach($data as $k => $v):?>
			         <option value="<?php echo $v['wname'];?>"><?php echo $v['wname'];?></option>
			     <?php endforeach;?>    
		   </select>
	   </div>
	   <div class="form-group">
	      <label for="name">员工工号</label>
	      <input type="text" name='wid' id="wid" readonly="readonly" class="disabled" />
	   </div>
	   <div class="form-group">
	      <label for="num">电话数量</label>
	      <input type="text" name='tnum'/>
	   </div>
	   <div class="form-group">
	      <label for="time">电话时长</label>
	      <input type="text" name='ttime'/>
	   </div>
	   <div class="form-group">
	      <label for="name">业务类型</label>
		  <select name='stype'>
		         <option value=''>--请选择--</option>
		         <option value='业务咨询类'>业务咨询类</option>
		         <option value='故障申报类'>故障申报类</option>
		         <option value='投诉建议类'>投诉建议类</option>
		         <option value='业务办理类'>业务办理类</option>
		   </select>
	   </div>
	   <div class="form-group">
	      <label for="name">业务状态</label>
		  <select  name='status'>
		         <option value=''>--请选择--</option>
		         <option value='退办'>退办</option>
		         <option value='专办'>专办</option>
		         <option value='受理'>受理</option>
		         <option value='回访'>回访</option>
		         <option value='办理中'>办理中</option>
		         <option value='办结'>办结</option>
		   </select>
	   </div>
	   <button type="submit" class="btn btn-success">提交</button> <button type="submit" class="btn btn-info">重置</button>
	</form>
</div>
</body>
</html>
<script  type="text/javascript" charset="utf-8">
	$('#wname').bind({
		change:function(){
			var name = $(this).val();
			var data = 'wname='+name;
			$.ajax({
               type:'post',
               url:"<?php echo U('getWorkerWid');?>",
               data:data,
               dataType:'json',
               success:function(msg){
                   $('#wid').val(msg[0]['wid']);
               }
			});
		}
	})	
</script>