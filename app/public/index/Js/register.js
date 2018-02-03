/**
 * 用户注册js -> lj [2018/02/02]
 */
layui.use(['form','layer'],function(){
    var layer = layui.layer;
    var form = layui.form;
    var $ = layui.jquery;

    $('.layui-form').submit(function(){
        return false;
    });

    // 自定义表单验证规则
    form.verify({
        username: function(value, item){ //value：表单的值、item：表单的DOM对象
            if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
              return '用户名不能有特殊字符';
            }
            if(/(^\_)|(\__)|(\_+$)/.test(value)){
              return '用户名首尾不能出现下划线\'_\'';
            }
            if(/^\d+\d+\d$/.test(value)){
              return '用户名不能全为数字';
            }
        }
          
        //我们既支持上述函数式的方式，也支持下述数组的形式
        //数组的两个值分别代表：[正则匹配、匹配不符时的提示文字]
        ,pass: [
            /^[\S]{6,12}$/
            ,'密码必须6到12位，且不能出现空格'
        ] 

    });

    form.on('submit(register)',function(data){
        $('#register').on('click', function(){
            var userName = $('#userName').val();
            var password = $('#password').val();
            var repassWord = $('#repassWord').val();
            var mobile = $('#mobile').val();
            var email = $('#email').val();
            
            if(password != repassWord){
                layer.msg('两次输入的密码必须一致');
                return false;
            }
            console.log(repassWord);
            console.log(password);

            $.post(
                'addUser', // url
                {userName:userName,password:password,repassWord:repassWord,mobile:mobile,email:email},
                function(result){
                    if(result.status == 1){
                        layer.msg(result.msg);
                        // location.href = 'userLogin';
                        location.href = 'judge';
                    }else{
                        layer.msg(result.msg);
                        return false;
                    }
                },'json');
        });
    });

   






});