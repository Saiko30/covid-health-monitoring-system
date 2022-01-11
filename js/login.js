function Insert_record()
{
   $(document).on('click','#login',function()
   {
        var User = $('#username').val();
        var password = $('#password').val();

        if(User == "" || password=="")
        {
            alert('Please Fill in the Blanks');
        }
        else
        {
            $.ajax(
                {
                    url : '../includes/login.inc.php',
                    method: 'post',
                    data:{UName:User,Upassword:password},
                    success: function(data)
                    {
                       if(data)
                    }
                })
        }
        
   })

   $(document).on('click','#btn_close',function()
   {
       $('form').trigger('reset');
       $('#message').html('');
   })   
}