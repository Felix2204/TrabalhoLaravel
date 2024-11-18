

<h2>Bem vindo ao editar</h2>

@if (session()->has('message'))
   {{session()->get('message')}}

@endif

<form action="{{route('residents.update',['resident'=> $resident->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <br>
    <input type="text" name="nome" value="{{ $resident->nome }}">
    <br>
    <input type="text" name="bloco" value="{{ $resident->bloco }}">
    <br>
    <input type="text" name="predio" value="{{ $resident->predio }}">
    <br>
    <input type="text" name="apartamento" value="{{ $resident->apartamento }}">
    <br>
    <button type="submit"> editar</button>
</form>
