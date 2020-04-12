$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $.ajax({
        url: "new",
        dataType: 'json', // (json, text, xml)  Kiể text chỉ sử dụng khi serve echo
        type: 'get',
        success: function(data){
            console.log(data.User);
        }
    });
});