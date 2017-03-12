$(function() {

    function feedbackMsg (responseData, textStatus) {
        for(key in responseData.fields)
        {

            $('.' + key.toLowerCase()).html("<span class='" + textStatus + " feedback'>" +
                    responseData.fields[key] +
                    "</span>");
        }
    }

    var login = $("#login-button");

    login.click(function(event) {

        event.preventDefault();
        event.stopImmediatePropagation();

        $("span").remove(".feedback");

        var formData = $('#login-form').serialize();

        $.ajax({
            url: "/app/auth",
            type: "POST",
            data: formData,
            dataType: "json"
        })
        .done(function(responseData) {

            if (responseData.status === 'success') {

                window.location = "/admin/dashboard";

            } else {

                feedbackMsg(responseData, 'red-text');

            }

        })
        .fail(function(responseData) {
            console.log(responseData);
        });
    });
});
