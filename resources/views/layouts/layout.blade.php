<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @yield('title')- Cep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
    <script type="text/javascript">
    
    function excluir_registro( ) {
        if( !confirm('Deseja realmente excluir este registro?') 
    ){
        if( window.event)
            window.event.returnValue=false;
        else
            e.preventDefault();
     }
    }

</script>
</head>
<body>
    
    <div class="container mt-5">
    @include('layouts/flash-message')
    </div>
   
<div class="card-body">
    @yield('grid') 
    </div>
    
<div class="card-body">
    @yield('content') 
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" 
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#example01').DataTable({
        "language": {
            "url":"//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json"
        }
    });

} );
    </script>
</body>
</html>