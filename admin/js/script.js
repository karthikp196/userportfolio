$(document).ready(function(){

    $("#but").click(function(e)
    {
        e.preventDefault();
        var user = $("#uname").val();
        var password = $("#pass").val();
        var data = "user="+user+"&pass="+password;

        $.ajax({
            url:"data.php",
            method:"POST",
            data:data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.is_error==0){ 
                    window.location = "dashboard.php";
                }
                else {
                    alert("invalid credentials");
                }
            }
        });
    });

    $("#sbmt").click(function(e){
        e.preventDefault();
       var firstname = $("#fname").val();
       var lastname = $("#lastname").val();
       var role = $("#role").val();
       var id = $('#fname').attr('class')
      
    
       var data = "fname="+firstname+"&lname="+lastname+"&role="+role+"&id="+id;
      
       $.ajax({
           url:"data.php",
           method:"POST",
           data:data,
           dataType:"TEXT",
           success:function(data){
               alert(data);
           }
       })
      
    })

    $("#udpt").click(function(e){
      
        e.preventDefault();
        var intro;
        var introb;
        var details;
        intro = $("#intro").val();
        introb = $("#introb").val();
        details = $("#txtdtl").val();
        var data = "intro="+intro+"&introb="+introb+"&details="+details;
        
        $.ajax({
            url:"data.php",
            method:"POST",
            data:data,
            dataType:"TEXT",
            success:function(data){
                alert(data);
            }
        })
    });

    function Ajax()
    {
        $(".skillupd").click(function(e)
        {
            e.preventDefault();

            var parent_id = $(this).attr("id");

            var skill_name = $("#"+"skill_name_"+parent_id).val();

            var skill_level = $("#"+"skill_level_"+parent_id).val();
            
            var data = "skill_id="+parent_id+"&skill_name="+skill_name+"&skill_level="+skill_level;

            alert(data);

            $.ajax(
            {
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"JSON",
                success:function(data)
                {
                    var thtml = "";
                    for(var i = 0 ; i < data.result.length ; i++ )
                    {
                        thtml += "<div class='col-lg-12 grid-margin'><div class='card'><div class='card-body'><h4 class='card-title'>Skills</h4><div class='table-responsive'><table class='table table-bordered'><thead><tr><th>#</th><th>Skill name</th><th>skill value</th><th>Progress</th></tr></thead><tr><td class='font-weight-medium'> </td><td><input type='text' id='skill_id_"+data.result[i].skill_id+"' value='"+data.result[i].skill_id+"' hidden> <input type='text' id='skill_name_"+data.result[i].skill_id+"'  value='"+data.result[i].skill+"'></td><td><input type='text'  id='skill_level_"+data.result[i].skill_id+"' value= '"+data.result[i].skillvalue+"'></td><td><div class='progress'><div class='progress-bar bg-success progress-bar-striped' role='progressbar' style='width:"+data.result[i].skillvalue+"%' aria-valuenow='"+data.result[i].skillvalue+"' aria-valuemin='0' aria-valuemax='100'></div></div></td></tr> </tbody></table><div class='upd_skil'><input type='submit' id='"+data.result[i].skill_id+"' class='mysub skillupd' value='submit'>   <input type='submit' id='"+data.result[i].skill_id+"' class='mysubd skilldlt' value='Delete'></div><div class='dlt_skil'></div></div></div></div></div> ";
                    }

                    $(".my_tb").html(thtml);
                    
                }
            })
        
        });
    }

    $(".skillupd").click(function(e)
    {
        e.preventDefault();

        var parent_id = $(this).attr("id");

        var skill_name = $("#"+"skill_name_"+parent_id).val();

        var skill_level = $("#"+"skill_level_"+parent_id).val();
          
        var data = "skill_id="+parent_id+"&skill_name="+skill_name+"&skill_level="+skill_level;

       

        $.ajax(
        {
             url:"data.php",
             method:"POST",
             data:data,
             dataType:"JSON",
             success:function(data)
             {
                 var thtml = "";
                 for(var i = 0 ; i < data.result.length ; i++ )
                 {
                    thtml += "<div class='col-lg-12 grid-margin'><div class='card'><div class='card-body'><h4 class='card-title'>Skills</h4><div class='table-responsive'><table class='table table-bordered'><thead><tr><th>#</th><th>Skill name</th><th>skill value</th><th>Progress</th></tr></thead><tr><td class='font-weight-medium'> </td><td><input type='text' id='skill_id_"+data.result[i].skill_id+"' value='"+data.result[i].skill_id+"' hidden> <input type='text' id='skill_name_"+data.result[i].skill_id+"'  value='"+data.result[i].skill+"'></td><td><input type='text'  id='skill_level_"+data.result[i].skill_id+"' value= '"+data.result[i].skillvalue+"'></td><td><div class='progress'><div class='progress-bar bg-success progress-bar-striped' role='progressbar' style='width:"+data.result[i].skillvalue+"%' aria-valuenow='"+data.result[i].skillvalue+"' aria-valuemin='0' aria-valuemax='100'></div></div></td></tr> </tbody></table><div class='upd_skil'><input type='submit' id='"+data.result[i].skill_id+"' class='mysub skillupd' value='submit'>   <input type='submit' id='"+data.result[i].skill_id+"' class='mysubd skilldlt' value='Delete'></div><div class='dlt_skil'></div></div></div></div></div> ";
                 }

                 $(".my_tb").html(thtml);

                 Ajax();
                 
             }
         })
    
    });



        $(".skilldlt").click(function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            var data="deleteid="+id;
            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                }
            })
        })

        $("#ad_mys").click(function(){
            $(".formadd").css('visibility','visible');
        });

        $(".skl_cnc").click(function(){
            $(".formadd").css('visibility','hidden');
        })

        $('#addall').click(function(){
            var newskill = $("#addsk").val();
            var newvalue=$("#addval").val();
            var data = "newskill="+newskill+"&newvalue="+newvalue;
            
            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                    $(".formadd").css('visibility','hidden');
                }
            })
        });

        $(".exp_upd").click(function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            var exptitle = $("#"+"titlexp_"+id).val();
            var expdetail =$("#"+"detailexp_"+id).val();
            var data = "id="+id+"&exptitle="+exptitle+"&expdetail="+expdetail;
            
          $.ajax({
              url:"data.php",
              method:"POST",
              data:data,
              dataType:"TEXT",
              success:function(data){
                  alert(data);
              }
          })
        })

        $(".expdlt").click(function(){
            var dlt_id= $(this).attr('id');
            data= "dlt_id="+dlt_id;
            
            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                }

            })
        });

        $(".exp_cnc").click(function(){
            $(".formexpadd").css('visibility','hidden');
        })

        $("#ad_exp").click(function(){
            $(".formexpadd").css('visibility','visible');
        })

        $(".newexp").click(function(){
            var newext =$("#addexpt").val();
            var newexd =$("#addexd").val();
            var data = "newext="+newext+"&newexd="+newexd;
            
            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                    $(".formexpadd").css('visibility','hidden');
                }
            })
        })

        $("#fb_u").click(function(e){
           e.preventDefault();
           var fb_i = $("#fb_i").val();
           var data = "fb_id="+fb_i;

           $.ajax({
               url:"data.php",
               method:"POST",
               data:data,
               dataType:"TEXT",
               success:function(data){
                   alert(data);
               }
           })
        })

        $("#tw_u").click(function(){
           var tw_id = $("#tw_i").val();
           var data = "tw_id="+tw_id;
           
           
           $.ajax({
            url:"data.php",
            method:"POST",
            data:data,
            dataType:"TEXT",
            success:function(data){
                alert(data);
            }
        })
           
        })

        $("#dr_u").click(function(){
            var dr_id = $("#dr_i").val();
            var data = "dr_id="+dr_id;

            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                }
            })
        })

        $("#bh_u").click(function(){
            var bh_id = $("#bh_i").val();
            var data = "bh_id="+bh_id;

            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                }
            })
        })

        $("#lk_u").click(function(){
            var lk_id = $("#lk_i").val();
            var data = "lk_id="+lk_id;

            $.ajax({
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data){
                    alert(data);
                }
            })
        })

        $("#up_call").click(function(){
           var title_c =$("#title_c").val();
           var hire_c =$("#hire_c").val();
           var location_c =$("#location_c").val();
           var email_c =$("#email_c").val();
           var phone_c =$("#phone_c").val();
           var web_c =$("#web_c").val();

           var data = "title_c="+title_c+"&hire_c="+hire_c+"&location_c="+location_c+"&email_c="+email_c+"&phone_c="+phone_c+"&web_c="+web_c;
           
           $.ajax({
            url:"data.php",
            method:"POST",
            data:data,
            dataType:"TEXT",
            success:function(data){
                alert(data);
            }
        })
         
        })


        
});