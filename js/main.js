function cikisYap(){
    $.ajax({
        type: "GET",
        url: 'logout.php',
        data: ({ logout : 1 }),
        success: function(data) {
            location.reload();
        },
        error: function() {
            alert(data);
        }
        });
}
$("#girisButton").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
       type: "POST",
       url: "login.php",
       data : {username:username,password:password},
       success: function(data)
       {
           if(data == "OK"){
                Swal.fire({
                    icon: 'success',
                    title: 'Giriş başarılı',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    location.reload();
           }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data,
                })
           }
       }
     });
    return false;
});
$("#kayitButton").click(function(){
    var username = $("#username-2").val();
    var email = $("#email-2").val();
    var password = $("#password-2").val();
    var repassword = $("#repassword-2").val();
    $.ajax({
       type: "POST",
       url: "user-record.php",
       data : {username:username,email:email,password:password,repassword:repassword},
       success: function(data)
       {
           if(data == "OK"){
                Swal.fire({
                    icon: 'success',
                    title: 'Kayıt başarılı',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    location.reload();
           }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data,
                })
           }
       }
     });
    return false;
});