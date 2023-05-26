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

    swal({
        title: `Message: ${response.message}`,
        text: "Go to Admin Page",
        icon: "success",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = './admin.php';
                ;
            } else {
                swal("Refresh and try again!");
            }
        });

};

const loginError = (response) => {
    $("#errorDetails").html(`Message: ${response.message} || Error: ${response.error}`);
    $("#errorDetails").removeClass().addClass("alert alert-danger");
};

var data = {};
$.ajax({
    url: './validations/chart1.validate.php',
    type: 'POST',
    dataType: 'json',
    success: function (response) {

        data.labels = response.labels;
        data.datasets = response.datasets;

        const ctx = document.getElementById('mainPageDetailChart');
        new Chart(ctx, {
            type: 'polarArea',
            data: data,
            options: {}
        });
    },
    error: function (xhr, status, error) {
        console.log('AJAX request error:', error);
    }
});


const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(navLink => {
    navLink.addEventListener('click', () => {
        navLinks.forEach(link => link.classList.remove('active'));
        navLink.classList.add('active');
    });
});

(function ($) {

    "use strict";

    $('[data-toggle="tooltip"]').tooltip()

})(jQuery);
