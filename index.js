//Ajax call for the sign up form
//Once the form is submitted
$(document).ready(function() {
    $("#signupform").submit(function(event) {
        //Prevent default php processing
        event.preventDefault();
        //collect users input
        var datatopost = $(this).serializeArray();
        console.log(datatopost);
        // send them to signup.php using AJAX
        $.ajax({
            url: "signup.php",
            type: "POST",
            data: datatopost,
            success: function(data) {
                // AJAX call successful: show error or success message
                if(data) {
                    $("#signupmessage").html(data);
                }
            },
            error: function() {
                // Ajax call fails: show AJAX call error
                $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax call. Please try again later</div>");
            }
        })
    
    });
});







//Ajax call for the sign up form
//Once the form is submitted
//Prevent default php processing
//collect users input
// send them to signup.php using AJAX
// AJAX call successful: show error or success message
// Ajax call fails: show AJAX call error

    