/**
 * laydate -> 日期与时间选择
 * lj -> 2018/01/31
 */

layui.use(['element','form','layer','laydate','upload'],function(){
    var element = layui.element;
    var form = layui.form;
    var $ = layui.jquery;
    var layer = layui.layer;
    var laydate = layui.laydate;
    var upload = layui.upload;

    layer.ready(function(){

        // 设置默认值
        var birthday = '';
        var provinceName = '';
        var cityName = '';
        var countryName = '';
        var gender = 0;
        var address = '';
        var portrait = '';

        // 日期事件
        var birth = laydate.render({
            elem: '#birthday', // 绑定元素
            max: 0, // 日期最大时间为当前日期
            trigger:'click', // 采用click弹出
            done:function(value,date,endDate){
                birthday = value;
                console.log(birthday);
            }
        });
   
        // 监听select -> 获取省id
        form.on('select(sheng)',function(data){
            pid = data.value; // 省id
            provinceName = data.elem[data.elem.selectedIndex].text; // 省名称
            console.log(pid);
            console.log(provinceName);
            getCity();
        });

        // 获取城市信息
        function getCity(){
            $.post(
                'getCityByPid',
                {pid:pid},
                function(result){
                    if(result.status == 1){
                        var cityInfo = result.info;
                        $("#city > option").slice(1).remove(); // 清空下拉选项
                        $("#country > option").slice(1).remove();
                        // 遍历信息 
                        for(index in cityInfo){
                            var option = "<option value='"+cityInfo[index].city_id+"'>"+cityInfo[index].city_name+"</option>";
                            $("#city").append(option);
                            // console.log(option);
                        }
                        form.render('select'); // 刷新select选择框渲染
                    }else{
                        return false;
                    }
                },'json'
            );
        }

        // 监听 select -> 获取市id
        form.on('select(shi)',function(data){
            cid = data.value;
            cityName = data.elem[data.elem.selectedIndex].text;
            console.log(cid);
            console.log(cityName);
            getCountry();
        });

        // 获取县区信息
        function getCountry(){
            $.post(
                'getCountryByCid',
                {cid:cid},
                function(result){
                    if(result.status == 1){
                        var countryInfo = result.info;
                        $("#country > option").slice(1).remove(); // 清空以前的记录
                        // 遍历信息
                        layui.each(countryInfo,function(index,item){
                            var option = "<option value='"+item.county_id+"'>"+item.county_name+"</option>";
                            $("#country").append(option);
                            // console.log(item);
                        });
                        form.render('select');
                    }else{
                        layer.msg(result.msg);
                        return false;
                    }
                },'json'
            );
        }

        // 监听 select -> 获取县区名称
        form.on('select(qu)',function(data){
            countryName = data.elem[data.elem.selectedIndex].text;
            console.log(countryName);
        })

        // 获取性别
        form.on('radio',function(){
            var sex = $(this).val();
            if( sex== '未知'){
                $(":radio").eq(0).attr('checked',true);
                gender = 0;
            }else if(sex == '男'){
                $(":radio").eq(1).attr('checked',true);
                gender = 1;
            }else{
                $(":radio").eq(2).attr('checked',true);
                gender = 2;
            }
            console.log(gender);
        });

        // 上传头像
        // var uploadInst = upload.render({
        //     elem: "#upimage",
        //     url: 'uploadImage',
        //     auto: true,
        //     choose: function(obj){
        //         obj.preview(function(index,file,result){
        //             console.log(file);
        //             console.log(result);
        //             $("#upimage").attr('src',result.info);
        //         })
        //     }
        // });

        var uploadInst = upload.render({
            elem: "#upimage",
            url: 'uploadImage',
            done: function(res,index,upload){
                console.log(res);
                if(res.status == 1){
                    portrait = res.info;
                }else{
                    layer.msg(res.msg);
                    return false;
                }
            },
            error: function(){
                uploadInst.upload(); // 上传失败，重新回调
            }
        });

        // 表单提交
        $("#submit").on('click',function(){
            var description = $("#description").val();
            var address = $(":input[name='address']").val();
            var userName = $(":input[name='userName']").val();
            var email = $(":input[name='email']").val();
            var phone = $(":input[name='phone']").val();
            var url = 'modifyUserInfo';
            var postData = {userName:userName,portrait:portrait,description:description,
                sex:gender,email:email,mobile:phone,province:provinceName,
                city:cityName,country:countryName,address:address,birthdate:birthday};
            $.post(
                url,
                postData,
                function(result){
                    if(result.status == 1){
                        layer.msg(result.msg);
                    }else{
                        layer.msg(result.msg);
                        return false;
                    }
                },'json');
            console.log(postData);
        });



    });

});