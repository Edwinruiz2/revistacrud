<h2>Nueva Revista</h2>
<form action="{{ url('revista') }}" method="post">
    @csrf
    @include ('revistas.form')
</form>