function alertFunc() {
    alert('Heyyo');
}

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

$("#yorum_yap").click(function(){
    var baslik_yorum = $("#baslik_yorum").val();
    var yorum_puan = $("#yorum_puan").val();
    var yorum = $("#yorum").val();
    var film_id = $("#film_id").val();
    $.ajax({
       type: "POST",
       url: "comment.php",
       data : {baslik_yorum:baslik_yorum,yorum_puan:yorum_puan,yorum:yorum,film_id:film_id},
       success: function(data)
       {
           if(data == "OK"){
                Swal.fire({
                    icon: 'success',
                    title: 'Yorum yapıldı',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    location.reload()
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

function fav(status) {
	var film_id = "<?php echo  $film_id ?>";
	var username = "<?php echo  $_SESSION['username'] ?>";
	$.ajax({
       type: "POST",
       url: "fav.php",
       data : {film_id:film_id,username:username,status:status},
       success: function(data)
       {
           if(data == "OK"){
			   if(status == "1"){
                Swal.fire({
                    icon: 'success',
                    title: 'Favorilerden Çıkarıldı',
                    showConfirmButton: false,
                    timer: 1500
                    })
			   }else{
				Swal.fire({
                    icon: 'success',
                    title: 'Favorilere Eklendi',
                    showConfirmButton: false,
                    timer: 1500
                    })
			   }
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
}
