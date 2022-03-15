$(document).ready(function() {

    $('.btn-send').click(function(e) {
        e.preventDefault()

        let dados = $('#form2').serialize()

        $('#retorn').empty()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/return.php',
            success: function(dados) {
                $('#retorn').append(`
                    <div class="col-12 col-sm-8 col-md-6">
                <div class="alert-secondary">
                    <h1 class="text-white text-center">
                        ${dados.mensagem}
                    </h1>
                    <img src="../../img2/${dados.tipo}" class="img-fluid">
                </div>
            </div>
                `)

            }
        })
    })
})