<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <style type="text/css" media="screen">
        div{display: inline-block;}
        .canvas{margin: 10px;}
    </style>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div class="wrap" style='width: 1450px;'>
         <div id="main" class="canvas" style="height:500px;width: 450px; "></div>
         <div id="main1"  class="canvas" style="height:500px;width: 450px;"></div>
         <div id="main2" class="canvas" style="height:500px;width: 450px;"></div>
    </div>
    <!-- ECharts单文件引入 -->
    <script src="/screen/Public/Home/js/echarts.min.js"></script>
    <script src="/screen/Public/Home/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript">
     $.ajax({
         type:'post',
         url:"<?php echo U('businesshandle');?>",
         data:'',
         dataType:'json',
         success:function(msg){
             console.log(msg);
         }
     });
    window.onload=function(){
       // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('main')); 
        
        var option = {
            tooltip: {
                show: true
            },
            title : {
                text: '驾驶证业务',
                x:'center'
            },
            xAxis : [
                {
                    type : 'category',
                    data : ["期满换证","超龄换证","损毁换证","遗失补证","延期换证","延期审验",'延期提交身体条件证明','考试预约','取消考试预约','打印学习驾驶证明','变更联系方式'],
                    axisLabel:{rotate:70,textStyle:{color:'#000'},interval:0}
                }
            ],
            grid: { // 控制图的大小，调整下面这些值就可以，
                  x: 40,
                  x2: 100,
                  y2: 150,// y2可以控制 X轴跟Zoom控件之间的间隔，避免以为倾斜后造成 label重叠到zoom上
            },
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    "name":"业务量",
                    "type":"bar",
                    "data":[5, 20, 40, 10, 10, 20,50,23,19,8,90]
                }
            ]
        };
        // 为echarts对象加载数据 
        myChart.setOption(option); 

         // 基于准备好的dom，初始化echarts图表
        var myChart1 = echarts.init(document.getElementById('main1')); 
        
        var option1 = {
            tooltip: {
                show: true
            },
            title : {
                text: '机动车业务量',
                x:'center'
            },
            xAxis : [
                {
                    type : 'category',
                    data : ["预选车牌号","补换号牌","补换行驶证","补换检验标志","检验预约","变更联系方式"],
                    axisLabel:{rotate:70,textStyle:{color:'#000'},interval:0}
                }
            ],
            grid: { // 控制图的大小，调整下面这些值就可以，
                  x: 40,
                  x2: 100,
                  y2: 150,// y2可以控制 X轴跟Zoom控件之间的间隔，避免以为倾斜后造成 label重叠到zoom上
            },
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    "name":"业务量",
                    "type":"bar",
                    "data":[5, 20, 40, 10, 15, 20]
                }
            ]
        };
        // 为echarts对象加载数据 
        myChart1.setOption(option1); 
        
         // 基于准备好的dom，初始化echarts图表
        var myChart2 = echarts.init(document.getElementById('main2')); 
        var option2= {
            tooltip: {
                show: true
            },
             title : {
                text: '违法处理业务',
                x:'center'
            },
            xAxis : [
                {
                    type : 'category',
                    data : ["电子监控违法处理",{value:'缴纳罚款',fonSize:1}],
                    axisLabel:{rotate:70,textStyle:{color:'#000'},interval:0}

                }
            ],
             grid: { // 控制图的大小，调整下面这些值就可以，
                  x: 40,
                  x2: 100,
                  y2: 150,// y2可以控制 X轴跟Zoom控件之间的间隔，避免以为倾斜后造成 label重叠到zoom上
            },
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    "name":"业务量",
                    "type":"bar",
                    "data":[5, 20]
                }
            ]
        };
        // 为echarts对象加载数据 
        myChart2.setOption(option2); 

    }
    </script>
</body>