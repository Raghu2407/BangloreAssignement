$(document).ready(function () {
    $("#button").click(function () {
        var username = $("#username").val();
        var useremail = $("#useremail").val();
        var userphone = $("#userphone").val();
        var userdob = $("#userdob").val();
        var gender = $("input[name='gender']:checked").val();
        //alert(gender);
        if (username === '' || useremail === '' || userphone === '' || userdob === '' || gender === '') {
            alert("fields cannot be blank");
        }
        else {
            var dataString = 'username=' + username + '&useremail=' + useremail + '&userphone=' + userphone + '&userdob=' + userdob + '&gender=' + gender;
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "ajaxinsert.php",
                data: dataString,
                cache: false,
                success: function (html) {
                    // document.getElementById("text").innerhtml;
                    //$('#success_message').html(html);
                    alert(html);

                    console.log(html)
                }

            });
        }
    });

    $("#buttonUpdate").click(function () {
        var ids = $('#id').val();
        var username = $("#username").val();
        var useremail = $("#useremail").val();
        var userphone = $("#userphone").val();
        var userdob = $("#userdob").val();
        var gender = $("input[name='gender']:checked").val();
        //alert(gender);
        if (username === '' || useremail === '' || userphone === '' || userdob === '' || gender === '') {
            alert("fields cannot be blank");
        }
        else {
            var dataString = 'id=' + ids + '&username=' + username + '&useremail=' + useremail + '&userphone=' + userphone + '&userdob=' + userdob + '&gender=' + gender;
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "ajaxupdate.php",
                data: dataString,
                cache: false,
                success: function (html) {
                    // document.getElementById("text").innerhtml;
                    //$('#success_message').html(html);
                    alert(html);

                    console.log(html)
                }

            });
        }
    });

});