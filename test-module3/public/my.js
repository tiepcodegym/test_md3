$(document).ready(function(){
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $("body").on("click",".delete-customer",function () {
       if(confirm('Ban muon xoa khong')) {
           let id = $(this).attr('data-id')
           $.ajax({
               url: baseUrl + '/api/customers/delete/' + id,
               type: "GET",
               success: function (res) {
                   $('#delete-' + id).remove()
               }
           })
       }
   })



})
















// $(document).ready(function(){
//     let baseUrl = origin;
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//
//     $("body").on("click",".delete-customer",function () {
//         if(confirm("Bạn có chắc muốn xóa không ?")){
//         let id = $(this).attr("data-id");
//         $.ajax({
//             url: baseUrl+"/api/customers/delete/"+id,
//             type: "GET",
//             success:function (res) {
//                 $('#delete-'+id).remove();
//             }
//         })
//         }
//     })
//
//
//
// })
