<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>lista de revistas</title>
</head>
<body>
<h2>Listado de revista</h2>

<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>isbn</th>
            <th>Fecha</th>
            <th>Tipo</th>
            <th>Director</th>
            <th></th>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($revistas as $revista)
        <td>{{$revista->id}}</td>
        <td>{{$revista->name}}</td>
        <td>{{$revista->isbn}}</td>
        <td>{{$revista->date}}</td>
        <td>{{$revista->type}}</td>
        <td>{{$revista->director}}</td>
        <td>
            <a href="{{url('/revista/'.$revista->id.'/edit')}}">Editar</a>
        </td>
        <td>
            <form action="{{url('/revista/'.$revista->id) }}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="Eliminar"
                onclick="return confirm('Desea eliminar el registro?')"
                >
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>

</table>

<a href="{{url('/revista/create')}}">Nuevo Registro de Revista</a>
  
</body>
</html>
