

jQuery(document).ready(function(){

    jQuery(document).on('click','.catedit',function(e){
        e.preventDefault();
        var catId = jQuery(this).val();

        $.ajax({
            url:'catedit/'+catId,
            type:'get',
            dataType:'json',
            success:function(result){
                jQuery("#name").val(result.name);
                jQuery("#des").val(result.des);
                jQuery("#tag").val(result.tag);
                jQuery(".sts").val(result.status);
                if(result.status==1){
                    jQuery(".sts").text("Active");
                }else{
                    jQuery(".sts").text("Inactive");
                }
                
                
            }
        });
    });

    showData();
    function showData(){
        $.ajax({
            url:'catshow',
            type:'get',
            dataType:'json',
            success:function(result){
                var sl=1;
                $.each(result.data, function(key, item){
                    jQuery(".tbody").append('<tr>\
                  <td>'+sl+'</td>\
                  <td>'+item.name+'</td>\
                  <td>'+item.des+'</td>\
                  <td>'+item.tag+'</td>\
                  <td>'+item.status+'</td>\
                  <td>\
                    <button data-target="#editcategory" data-toggle="modal" class="btn btn-sm btn-info catedit" value="'+item.id+'"><i class="fa fa-edit"></i></button>\
                    <button class="btn btn-sm btn-danger" value="'+item.id+'">Delete</button>\
                  </td>\
                </tr>');
                    sl++;
                });
            }
        });
    }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    jQuery(".addCategory").click(function(){
        var name = jQuery(".name").val();
        var des = jQuery(".des").val();
        var tag = jQuery(".tag").val();
        var status = jQuery(".status").val();

        $.ajax({
            url:'catinsert',
            type:'post',
            dataType:'json',
            data:{

                'name':name,
                'des':des,
                'tag':tag,
                'status':status
            },
            
            success: function(result){
                showData();
            }
        });
    });
});