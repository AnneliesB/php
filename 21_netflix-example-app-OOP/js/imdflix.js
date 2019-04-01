$("#email").on("keyup", function(e){
    let email = $("#email").val();
    console.log(email);
    $.ajax({
        method: "POST",
        url: "ajax/accountAvailable.php",
        data: { email: email},
        dataType:'json'
    })
        .done(function( res ) {
            if(res.status =="success"){
                let availability = $(".availabilityCheck");
                availability.css("display", "none");
            } else {
                let availability = $(".availabilityCheck");
                availability.css("display", "block");
                availability.css("color", "red");
                availability.html("Email not available");
            }
        });
    e.preventDefault();
});