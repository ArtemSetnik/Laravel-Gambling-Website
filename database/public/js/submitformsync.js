/**
 * Created by Administrator on 2016/7/20.
 */
$(function(){


    $('.submit-form-sync').click(function(){
        var btn = $(this);
        btn.attr('disabled', true);

        var go = true;
        var form = $(this).parents('form');

        var url = form.attr('action');
        var method = form.attr('method');

        var rest_method = form.find("input[name='_method']");
        var method_s = rest_method.length > 0 ? rest_method.val() : method;
        if (go == true)
        {
            var detailLoad = layer.load(2, {
                shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
                //shade:false
            });

            $.ajax({
                type: method_s,
                url: url,
                data: form.serialize(),
                dataType: "json",
                success: function(data){
                    layer.close(detailLoad);
                    btn.attr('disabled', false);

                    var html = '';
                    var obj = JSON.parse (data.status.msg);

                    for ( var p in obj )
                    {
                        if (typeof (obj[p]) == 'string')
                        {
                            html+= '<p><b>'+ obj[p] + '</b></p>';
                        } else if(obj[p] instanceof Array)
                        {
                            for (var i=0;i<obj[p].length;i++)
                            {
                                html+= '<p><b>'+ obj[p][i] + '</b></p>';
                            }

                        }
                    }
                    //
                    layer.confirm(html, {
                        btn: ['确定'] //按钮
                    });
                    if (data.status.errorCode == 0)
                        location.href=data.url;
                    //else
                    //    layer.confirm(html, {
                    //        btn: ['确定'] //按钮
                    //    });

                }
            });
        }
    })


    $('#form_submit_btn').click(function(){
        var btn = $(this);
        btn.attr('disabled', true);

        var go = true;
        var form = $(this).parents('form');

        var url = form.attr('action');
        var method = form.attr('method');

        var rest_method = form.find("input[name='_method']");
        var method_s = rest_method.length > 0 ? rest_method.val() : method;
        if (go == true)
        {
            //var detailLoad = layer.load(2, {
            //    shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
            //    //shade:false
            //});

            $.ajax({
                type: method_s,
                url: url,
                data: form.serialize(),
                dataType: "json",
                success: function(data){
                    //layer.close(detailLoad);
                    btn.attr('disabled', false);

                    var html = '';
                    var obj = JSON.parse (data.status.msg);

                    for ( var p in obj )
                    {
                        if (typeof (obj[p]) == 'string')
                        {
                            html+= '<p><b>'+ obj[p] + '</b></p>';
                        } else if(obj[p] instanceof Array)
                        {
                            for (var i=0;i<obj[p].length;i++)
                            {
                                html+= '<p><b>'+ obj[p][i] + '</b></p>';
                            }

                        }
                    }
                    //
                    if (data.status.errorCode == 0)
                        //location.href=data.url;
                        weui.alert(html,{
                            title:'提示',
                            buttons:[{
                                label: '好的',
                                type: 'main',
                                onClick :function(){
                                    location.href=data.url
                                }

                            }]
                        })
                    else
                        weui.alert(html,{
                            title:'提示',
                            buttons:[{
                                label: '好的',
                                type: 'main'
                            }]
                        })

                }
            });
        }
    })
});