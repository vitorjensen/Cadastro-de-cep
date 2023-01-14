$(document).on('blur', '#cep', function(){
    const cep = $(this).val();
    
    $.ajax({
       url:'https://viacep.com.br/ws/'+cep+'/json/',
       method: 'GET',
       dataType: 'json',
       success: function(data) {
        if (data.erro) {
          alert('CEP INVÁLIDO!');
        }
       $('#rua').val(data.logradouro);
       $('#cidade').val(data.localidade);
       } 
    });
});