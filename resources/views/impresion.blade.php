<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>

    <style>
    #mancos{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    #mancos td,#emp th{
        border: 1px solid #ddd;
        padding: 8px;
    }
    #mancos tr:nth-child(even)
    {
        background-color: #0bfdfd;
    }
    #mancos th
    {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #63A42C;
        color: #fff;
    }
    
    </style>
</head>
<body>
    <table id="mancos">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>DescripcionC</th>
            
            </tr>
        
        </thead>
            <tbody>
            @foreach( $manco as $mancos)
            <tr>
            <td> 
            <img class="card-img-top " style="height: 200px; width:200px" src="{{ asset('storage').'/'.$mancos->Portada }} " alt="Card image cap">
            </td>
                <td> {{ $mancos->Nombre }} </td>
                <td> {{ $mancos->Autor }} </td>
                <td> {{ $mancos->Editorial }} </td>
                <td> {{ $mancos->DescripcionC }} </td>
            
            </tr>
            @endforeach
            </tbody>
    
    </table>
    
    
</body>
</html>