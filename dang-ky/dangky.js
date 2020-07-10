$('#register').click(async function () {
    let firstName = $('#FirstName').val();
    let lastName = $('#LastName').val();
    let userName = $('#InputUsername').val();
    let email = $('#InputEmail').val();
    let address = $('#InputAddress').val();
    let password = $('#InputPassword').val();
    let repassword = $('#RepeatPassword').val();
    
    if (firstName == "") {
        notificationError("Chưa nhập Họ");
        return;
    }
    if (lastName == "") {
        notificationError("Chưa nhập Tên");
        return;
    }
    if (userName == "") {
        notificationError("Chưa nhập Tên tài khoản");
        return;
    }
    
    if (email == "") {
        notificationError("Chưa nhập Email");
        return;
    }
    if (password == "") {
        notificationError("Chưa nhập Mật khẩu");
        return;
    }

    if (repassword != password) {
        notificationError("Mật khẩu và nhập lại mật khẩu không giống nhau");
        return;
    }
   let checkEmail= await $.ajax({
        type: "POST",
        url: "checkEmail.php",
        data: {
            email:email
        },
        dataType: "json",
        success:  function (response) {
            return response[0];
        }
    });
    let checkUserName=await $.ajax({
        type: "POST",
        url: "checkUserName.php",
        data: {
            userName:userName
        },
        dataType: "json",
        success:  function (response) {
            return response[0];
        }
    });
    if(checkUserName[0].error==true){
        notificationError(checkUserName[0].message);
        return;
    }
    if(checkEmail[0].error==true){
        notificationError(checkEmail[0].message);
        return;
    }
   await $.ajax({
        type: "POST",
        url: "register.php",
        data: {
            firstName:firstName,
            lastName:lastName,
            userName:userName,
            email:email,
            address:address,
            password:password
        },
        dataType: "json",
        success: function (response) {
            notification(response)
            setTimeout(() => {
                window.location.replace("../dang-nhap");
            }, 1500);
        }
    });
});

