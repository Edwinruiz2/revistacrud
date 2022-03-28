<h2>Editar registro de Revista</h2>

<form action="{{ url('/revista/'.$revista->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('revistas.form')
</form>