var baseUrl='http://localhost/Aula/curso/codeigniter/';
$(document).ready(function () {
    
    $('#tabelaClientes').DataTable();

    $('.btnEditar').on('click', function () {
        var id = $('#btnEditar').val();
        
        console.log("Valor do ID: " + id);
        
        //$.getJSON(baseUrl + 'editapessoa'/+id, function(data) {
            //data is the JSON string
       // });
        
        console.log("ola mundo111111!");
        
        /*
         * $.post( "ajax/test.html", function( data ) {
            $( ".result" ).html(data);
        });
         */
        
    });

});
