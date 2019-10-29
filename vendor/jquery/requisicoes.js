<script type="text/javascript">
$(document).ready(function(){
     
  
    $('#btnPais').click(function(e){
        $('#btnPais').hide();
        $('#mensagem').html('<span class="mensagem">Aguarde, carregando ...</span>');  
         
        $.getJSON('consulta.php?opcao=pais', function (dados){
             
           if (dados.length > 0){    
              var option = '<option>Selecione o País</option>';
              $.each(dados, function(i, obj){
                  option += '<option value="'+obj.sigla+'">'+obj.nome+'</option>';
              })
              $('#mensagem').html('<span class="mensagem">Total de paises encontrados.: '+dados.length+'</span>'); 
              $('#cmbPais').html(option).show();
           }else{
               Reset();
               $('#mensagem').html('<span class="mensagem">Não foram encontrados paises!</span>');
           }
        })
    })
     
  
    $('#cmbPais').change(function(e){
        var pais = $('#cmbPais').val();
        $('#mensagem').html('<span class="mensagem">Aguarde, carregando ...</span>');  
         
        $.getJSON('consulta.php?opcao=estado&valor='+pais, 
        function (dados){ 
         
           if (dados.length > 0){    
              var option = '<option>Selecione o Estado </option>';
              $.each(dados, function(i, obj){
                  option += '<option value="'+obj.sigla+'" >'+obj.nome+'</option>';
              })
              $('#mensagem').html('<span class="mensagem">Total de estados encontrados.: '+dados.length+'</span>'); 
           }else{
              Reset();
              $('#mensagem').html('<span class="mensagem">Não foram encontrados estados para esse país!</span>');  
           }
           $('#cmbEstado').html(option).show(); 
        })
    })
     
    
    $('#cmbEstado').change(function(e){
        var estado = $('#cmbEstado').val();
        $('#mensagem').html('<span class="mensagem">Aguarde, carregando ...</span>');  
         
        $.getJSON('consulta.php?opcao=cidade&valor='+estado, 
        function (dados){
             
            if (dados.length > 0){   
                var option = '<option>Selecione a Cidade</option>';
                $.each(dados, function(i, obj){
                    option += '<option>'+obj.nome+'</option>';
                })
                $('#mensagem').html('<span class="mensagem">Total de cidades encontradas.: '+dados.length+'</span>');
            }else{
                Reset();
                $('#mensagem').html('<span class="mensagem">Não foram encontradas cidades para esse estado!</span>');  
            }
            $('#cmbCidade').html(option).show();
        })
    })
     
    function Reset(){
        $('#cmbPais').empty().append('<option>Carregar Países</option>>');
        $('#cmbEstado').empty().append('<option>Carregar Estados</option>>');
        $('#cmbCidade').empty().append('<option>Carregar Cidades</option>');
    }
});
</script>