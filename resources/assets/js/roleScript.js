$(document).ready(function(){
    //assign funciton
    $('#assign-btn').click(function (e){
        e.preventDefault();

        var role_id = $('#role_id').val();
        var CSRF_TOKEN = $('input[name="_token"]').val();

        console.log('asdfasdf');
        $.ajax({
            url: '/assign',
            type: 'post',
            data: 
            {
                _token: CSRF_TOKEN,
                role_id: role_id
            },
            success: function (data)
            {
                console.log(data.success);
            },
            error: function ()
            {

            }
        });;
    });
});
