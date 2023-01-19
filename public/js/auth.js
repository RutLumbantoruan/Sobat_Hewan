const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
    $("#username_register").focus();
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
    $("#username_login").focus();
});

function auth(button,form,uri,title)
{
    $(button).submit(function () {
        return false;
    });
    let data = $(form).serialize();
    $(button).prop("disabled", true);
    $(button).html("Mohon tunggu");
    $.ajax({
        type: "POST",
        url: uri,
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.alert=="success") {
                success_message(response.message);
                $(form)[0].reset();
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                    if(title == "Login"){
                        location.reload();
                    }else{
                        container.classList.remove("sign-up-mode");
                        $("#username_login").focus();
                    }
                }, 2000);
            } else if (response.alert=="info") {
                    info_message(response.message);
                    $(form)[0].reset();
                    setTimeout(function () {
                        $(button).prop("disabled", false);
                        $(button).html(title);
                        if(title == "Login"){
                            location.reload();
                        }else{
                            container.classList.remove("sign-up-mode");
                            $("#username_login").focus();
                        }
                    }, 2000);
            } else if (response.alert=="warning") {
                warning_message(response.message);
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                }, 2000);
            } else if (response.alert=="error"){
                error_message(response.message);
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                }, 2000);
            }
        },
    });
}
