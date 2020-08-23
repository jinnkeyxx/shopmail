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
            url: 'mvc/model/dangki.php',
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
                    load('home', 2000);
                } else {
                    toastr['error'](res.messages)
                    load('dangki', 2000)
                }
            }
        })
    }

});
$('#logout').click((e) => {
    e.preventDefault();

    $.ajax({
        url: 'mvc/model/logout.php',
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
    let user = $('#user').val()
    let pass = $('#pass').val()
    if(user.trim() === "" || pass.trim() === ""){
        toastr['error']('còn thiếu gì đó')
    }
    else {
        $.ajax({
            url: 'mvc/model/dangnhap.php',
            type : 'post',
            data : {user : user , pass : pass},
            dataType : 'json',
            beforeSend :  () => {
                $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>`)
            }, 
            success : (res) => {
                if(res.status === 0){
                    toastr["success"](res.messages)
                   
                    // load('home' , 2000)
                }
                else {
                    toastr['error'](res.messages)
                    load('dangnhap' , 2000)
                }
            }
        })
    }
})
$('.btn-addmail').click(()=> {
   let type = $("select#loai option:checked" ).val();
   let mail = $('#mail').val();
  
   if(mail === ""){
       toastr['error']('Còn thiếu gì đó');
   } 
   else {
       $.ajax({
           url : 'mvc/model/addmail.php',
           type : 'post',
           data : {mail : mail  , loai : type},
           dataType : 'json',
           beforeSend : () => {
               $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
               <span class="sr-only">Loading...</span>`)
           },
           success : (res) => {
                if(res.status === 0){
                    toastr["success"](res.messages)
                    // load('home' , 2000)
                }
                else {
                    toastr["error"](res.messages)
                }
           }
       })
   }
        
})
$('.btn-type-mail').click(()=> {
    let type = $('#type-mail').val()
    let tien = $('#tien-type-mail').val()
    if(type === "" || tien === ""){
        toastr["success"]('Còn thiếu gì đó')
    }
    else {
        $.ajax({
            url : 'mvc/model/addtypemail.php',
            type: 'post',
            data : {tien : tien , type : type},
            dataType : 'json',
            beforeSend : () => {
                $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
               <span class="sr-only">Loading...</span>`)
            },
            success : (res) => {
                if(res.status === 0){
                    toastr["success"](res.messages)
                    // load('home' , 2000)
                }
                else {
                    toastr["error"](res.messages)
                }
            }
        })
    }
})
$('.btn-nap-tien').click(()=> {
    let type = $("select#dCategory option:checked" ).val();
    let gia = $("select#dCount option:checked" ).val();
    let dSeri = $('#dSeri').val();
    let dPin = $('#dPin').val();
    if(dSeri === "" || dPin === ""){
        toastr['error']('Còn thiếu gì đó');
    }
    else {
        $.ajax({
            url : 'mvc/model/nap-tien.php',
            type : 'post',
            data : {type : type , gia : gia , seri : dSeri , pin : dPin},
            dataType : 'json',
            beforeSend : () => {
                $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>`)
            },
            success : (res) => {
                if(res.status === 0){
                    toastr["success"](res.messages)
                    // load('home' , 2000)
                }
                else {
                    toastr["error"](res.messages)
                }
            }
        })
    }

})
$('#soluong').keyup(()=> {
    let type = $("select#loai option:checked" ).val();
    let  tien = $('#tongthanhtoan').text();
    type = parseFloat(type);
    let soluong = $('#soluong').val();
    tien = parseFloat(tien);
    let tong = soluong * type;
    $('#tongthanhtoan').text(tong);
    
})