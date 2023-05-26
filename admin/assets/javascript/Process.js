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



const ctx = document.getElementById('myChart');
const data = {
    labels: [
        'Blog Count',
        'Blog View Count',
        'Visit Count',
        'Registed Count',

    ],
    datasets: [{
        label: 'Blog Dataset',
        data: [11, 16, 20, 3],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
        ]
    }]
};

new Chart(ctx, {
    type: 'polarArea',
    data: data,
    options: {}
});


const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(navLink => {
  navLink.addEventListener('click', () => {
    navLinks.forEach(link => link.classList.remove('active'));
    navLink.classList.add('active');
  });
});

(function($) {

	"use strict";

	$('[data-toggle="tooltip"]').tooltip()

})(jQuery);
