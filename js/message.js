$("#typingArea").on("submit", function(e) {
    e.preventDefault();
        let formData = new FormData(this);
        formData.append("send","send");
        if($("#typingField").val())
        $.ajax({
            type: "POST",
            url: "php/messages.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
            }
        });
        $("#mainSection").scrollTop($("#mainSection")[0].scrollHeight);
        $("#typingField").val("");
    });