<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"/Users/Svn/www.blog.com/app/index/view/layuitest.html";i:1517404781;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layDate快速使用</title>
  <link href="/public//plug/layui/css/layui.css" rel="stylesheet" />
</head>
<body>
 
<div class="layui-inline"> <!-- 注意：这一层元素并不是必须的 -->
  <input type="text" class="layui-input" id="test">
  <div id="test1"></div>
</div>
 
<script src="/public//plug/layui/layui.js"></script>

<script>
layui.use(['laydate','laypage'], function(){
  var laydate = layui.laydate;
  var laypage = layui.laypage;


    
//     laydate.render({
//   elem: '#test'
//   ,done: function(value, date, endDate){
//     console.log(value); //得到日期生成的值，如：2017-08-18
//     console.log(date); //得到日期时间对象：{year: 2017, month: 8, date: 18, hours: 0, minutes: 0, seconds: 0}
//     console.log(endDate); //得结束的日期时间对象，开启范围选择（range: true）才会返回。对象成员同上。
//   }
// });

    laypage.render({
        elem:'test1',
        count:50
    })









});
</script>
</body>
</html>