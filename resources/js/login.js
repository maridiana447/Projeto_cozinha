$(document).ready(function() {

    $("#entrar").click(function() {
        if ($("#email").val() === "" || $("#senha").val() === "") {
            Swal.fire({
                icon: "error",
                title: "Erro",
                text: "Por favor, preencha todos os campos!"
            });
        return;
        }

        var letras=$("#senha").val().length;
        console.log(letras);
        if(letras<2){
            Swal.fire({
                icon: "error",
                title: "Erro",
                text: "A senha deve ter pelo menos 2 caracteres!"
            });
            return;
        }

        $.ajax({
            url: "../api/login_funcionario",
            type: "POST",
            data: {
                email: $("#email").val(),
                senha: $("#senha").val()
            },
            success: function(response) {
                console.log(response);
                if (response.erro == "n") {
                  
                    $.cookie('token', response.token, { expires: 7});
                    $.cookie('funcionario_id', response.funcionario_id, { expires: 7});
                    setTimeout(function() {
                       window.location.href = "../home";
                    }, 3000);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Erro",
                        text: response.message
                    });
                }
            }
        });
    });
});