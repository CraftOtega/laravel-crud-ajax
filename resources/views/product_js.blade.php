
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        </script>
        
        
        <script>
           
        $(document).ready(function(){
        //   alert('yesrr');
        $(document).on('click', '.add_product', function(e){

        e.preventDefault();
        let  name = $('#name').val();
        let  price = $('#price').val();
            // alert(name + price);
    $.ajax({

    url:"{{ route('add.products') }}",
    method:'post',
    data:{name:name,price:price},
    success:function(res){


        if(res.status=='success'){
        $('#addModal').modal('hide');
        $('#addproductForm')[0].reset();
        $('.table').load(location.href+' .table');
        toastr["success"]("product successfully added")





                

    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }

        }
    },error:function(err){

    let error = err.responseJSON;
    $.each(error.errors,function(index, value){
    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>' +'<br>');

    });
    }
    });
        });//not ;




    //show product value  in update form 
    $(document).on('click', '.update_product_form', function(e){

    e.preventDefault();

    //let  price = $('#price').val();
    let id = $(this).data('id');
    let name = $(this).data('name');
    let price = $(this).data('price');

    $('#up_id').val(id);
    $('#up_name').val(name);
    $('#up_price').val(price);

    });

 





    //update product the record

    $(document).on('click', '.update_product', function(e){

    e.preventDefault();

    let  up_id = $('#up_id').val();
    let  up_name = $('#up_name').val();
    let  up_price = $('#up_price').val();

    $.ajax({

    url:"{{ route('update.products') }}",
    method:'post',
    data:{up_id:up_id,up_name:up_name,up_price:up_price},
    success:function(res){  


    if(res.status=='success'){
    $('#updateModal').modal('hide');
    $('#updateproductForm')[0].reset();
    $('.table').load(location.href+' .table');

    toastr["success"]("product update")





                

    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }

    }
    },error:function(err){

    let error = err.responseJSON;
    $.each(error.errors,function(index, value){
    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>' +'<br>');

    });

    }

    });
    });//not ;











    //delete product the record

    $(document).on('click', '.delete_product', function(e){

    e.preventDefault();

    let  product_id = $(this).data('id');
    //alert(product_id);

    if(confirm('Are You sure  to delete product ?')){


                        $.ajax({

                    url:"{{ route('delete.products') }}",
                    method:'post',
                    data:{product_id:product_id},
                    success:function(res){


                    if(res.status=='success'){

                    $('.table').load(location.href+' .table');
                    toastr["success"]("product deleted")





                

    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
                }
                    }
                });

    } 
    });//not ;





    //pagination

    $(document).on('click', '.pagination a', function(e){

    e.preventDefault();

    let  page = $(this).attr('href').split('page=')[1];
    product(page) 

    })



    function product(page){

    $.ajax({

    url:"/pagination/paginate-data?page="+page,
    success:function(res){

    $('.table-data').html(res);
    }
    });

    }




//searching



$(document).on('keyup', function(e){

 e.preventDefault();

 let search_string = $('#search').val();

 //alert(search_string);

 $.ajax({

     url:"{{ route('search.product') }}",
     method:'GET',
     data:{search_string:search_string },



 success:function(res){

 $('.table-data').html(res);

if(res.status=='nothing_found'){



    $('.table-data').html('<span class="text-danger">'+'Nothing Found' + '</span>');



}



  }
     


 });

});










        });// first tag
        
        
        </script>