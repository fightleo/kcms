/**
 * 用户添加信息验证
 * **/

    $(document).ready(function(){

        var unReg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/; //以字母开头，长度在5-16之间，只能包含数字、“_”、“.”
        var pwdReg = /^[a-zA-Z]\w{5,17}$/; //以字母开头，长度6-18，只能包含数字、下划线
        //检测用户名格式，若正确则进行判断用户名是否存在
        $("#uname").blur(function(){
          //判断用户名是否为空
          if($(this).val()!=""){
             if(!unReg.test($(this).val())){
                
                    alert('您输入的用户名格式错咯！');
                    $(this).focus();
                
                  
              }else{

                 $.ajax({
                     type:"get",
                     url:"show",
                     data:{uname:$(this).val()},
                     dataType:'json',
                     async:false,
                     success: function(data) {
                         if(data===1){

                             alert('用户名已存在，请重新填写！');
                         }else{
                          
                             alert("用户名未注册！");
                         }

                     },
                     error: function(data) {
                    
                         alert("验证用户名！");
                     }
                 });
             }
           } 
        });

        //检测密码格式
        $("input[type='password']").blur(function(){
          if($(this).val()!=""){
            if(!pwdReg.test($(this).val())){
                alert('您输入的密码格式错咯！');
                $(this).focus();
              }
            }
        });
        //判断输入的密码是否一致
        $("#rpassword").blur(function(){

          //两次输入的密码均不为空且用户名已填写
          if($(this).val()!=""&& $("#submit_form_password").val()!=""&& $("#uname").val()!=""){

            if( $("#submit_form_password").val()!= $(this).val()){

                  alert('两次输入的密码不一致！');
              }
          }
        });
      
    });
