/**
 * laydate -> 日期与时间选择
 * lj -> 2018/01/31
 */

layui.use(['element','form','layer','laydate'],function(){
    var element = layui.element;
    var form = layui.form;
    var $ = layui.jquery;
    var layer = layui.layer;
    var laydate = layui.laydate;

    layer.ready(function(){

        // 日期事件
        var birth = laydate.render({
            elem: '#birthday', // 绑定元素
            max: 0, // 日期最大时间为当前日期
            trigger:'click' // 采用click弹出
        });
   
        // 监听select -> 获取省id
        form.on('select(sheng)',function(data){
            pid = data.value; // 省id
            console.log(pid);
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
                            console.log(option);
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
            console.log(cid);
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
                        $("#city > option").slice(1).remove(); // 清空以前的记录
                        $("#country > option").slice(1).remove();
                        // 遍历信息
                        layui.each(countryInfo,function(index,item){
                            var option = "<option value='"+item.county_id+"'>"+item.county_name+"</option>";
                            $("#country").append(option);
                            console.log(item);
                        });
                        form.render('select');
                    }else{
                        layer.msg(result.msg);
                        return false;
                    }
                },'json'
            );
        }






    });

});