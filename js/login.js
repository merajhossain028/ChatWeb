$(document).ready(function(){
    $("#loginForm").on("submit", function(e){
        e.preventDefault();
        // get all form data
        let formData = new FormData(this);
        formData.append("login","login");

        // get & post request in jquery
        $.ajax({
            // post or get => post
            type: "POST",
            // file name
            url: "php/login.php",
            data: formData,
            contentType: false,
            processData: false,
            // get response
            success: function(response){
                if(response == "success"){
                    location.href = "users.php";
                }else{
                    $("#errors").css("display", "block");
                    $("#errors").html(response);
                }
            }
        });
    });
});