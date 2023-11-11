<h1>User Registration</h1>
<form id="register-form">
    <input type="text" name="name" placeholder="Enter name">
    <br><br>
    <input type="email" name="email" placeholder="Enter email">
    <br><br>

    <input type="password" name="password" placeholder="Enter password">
    <br><br>

    <input type="password" name="password_confirmation" placeholder="Enter  confirm password">
    <br><br>
<input type="submit" value="Register">
</form>

<script>
    $(document).ready(function(){
        $("#register_form").submit(function(event)
        {
            event.preventDefault();
            var formData=$(this).serialsize();
            $.ajax({
                url:"http://127.0.0.1:8000/api/register",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.msg){

                    }
                    else{
printErrorMsg(data)
                    }
                    // console.log(data);

                }
            });
        });
        function printErrorMsg(msg){
            $(".error").text("");
            $.each(msg,function(key,value){
                $("'"+key+"_err").text(value);
            });
        }
    });
</script>
