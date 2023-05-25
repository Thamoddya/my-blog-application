const validateAdmin = () => {
    let email = $("#adminEmail").val();
    let password = $("#adminPassword").val();

    let data = {
        email: email,
        password: password
    };

    $.ajax({
        method: 'POST',
        url: './validations/loginValidate.php',
        data: data,
        dataType: 'json',
        success: (response) => {
            response.success === 'true' ? loginSuccess(response) : loginError(response);
        },
        error: (e) => {
            console.log(e);
        }
    });
};

const loginSuccess = (response) => {
    $("#errorDetails").html(`Message: ${response.message}`);
    $("#errorDetails").removeClass().addClass("alert alert-success");
};

const loginError = (response) => {
    $("#errorDetails").html(`Message: ${response.message} || Error: ${response.error}`);
    $("#errorDetails").removeClass().addClass("alert alert-danger");
};
