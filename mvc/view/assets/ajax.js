toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

function load(url, time) {
    setTimeout(() => {
        window.location.href = url
    }, time)
}
$('#log_form').submit((e) => {
    e.preventDefault();

    let fullname = $('#fullname').val();
    let username = $('#user').val();
    let password = $('#pass').val();
    let repassword = $('#repassword').val();
    if (fullname.trim() == "" || username.trim() == "" || password.trim() == "" || repassword == "") {
        toastr["error"]("còn thiếu gì đó?")
    } else if (password !== repassword) {
        toastr["success"]("Mật khẩu không trùng nhau?")
    } else {
        $.ajax({
            url: './mvc/model/dangki.php',
            type: 'post',
            data: { fullname: fullname, username: username, password: password, repassword: repassword },
            dataType: 'json',
            beforeSend: () => {
                $('#btn-dangki').html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>`)
            },
            success: (res) => {
                if (res.status === 0) {
                    toastr["success"](res.messages)
                    load('home', 2);
                } else {
                    toastr['error'](res.messages)
                    load('dangki', 2)
                }
            }
        })
    }

});
$('#logout').click((e) => {
    e.preventDefault();

    $.ajax({
        url: '.mvc/model/logout.php',
        type: 'post',
        dataType: 'json',
        beforeSend: () => {

        },
        success: (res) => {
            if (res.status === 0) {
                toastr['success'](res.messgaes);
            }
        }
    })
})
$('#btn-login').click(() => {

})