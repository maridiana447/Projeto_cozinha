$(document).ready(function(){

});

function deleta_funcionario(id_funcionario){
    let funcionario_id = $.cookie('funcionario_id');
    let token = $.cookie('token');
    $.ajax({
        type: "DELETE",
        url: "/api/deletar_funcionario",
        data: {
            id_funcionario: id_funcionario,
            usuario_id: usuario_id,
            token: token
        },
        dataType: "json",
        success: function (response) {
            if(response.erro == 'n'){
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Funcionario deletado com sucesso'
                }).then(()=>{
                    location.reload();
                });

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível deletar o funcionário. Tente novamente mais tarde.'
                });
            }
            
        }
    });
}