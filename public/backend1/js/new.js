$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $.ajax({
        url: "http://localhost:8000/Demo/demoApi/DemoApi/api/new",
        data: {

        },
        dataType: 'json', // (json, text, xml)  Kiể text chỉ sử dụng khi serve echo
        type: 'get',
        success: function(data){
            // console.log(data.User);
            var html = '';
            $.each(data.User,function(key, value){
                html += '<tr>';
                    html += '<td>' + value.name + '</td>';
                html += '</tr>';
            });
            $('.listUser').html(html);
            
        },
        error: function(){
            alert('Loi');
        }
    });
});