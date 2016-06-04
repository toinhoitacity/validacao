@extends("layout.principal")
@section("conteudo")

@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}} </li>
        @endforeach
    </ul>
@endif
<form action="{{ action("FormularioController@storage") }}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="">
    <div>
        <label>Preferência musical</label> <br>
        <input type="checkbox" name="preferencia_musical[]" value="rock">Pagode <br>
        <input type="checkbox" name="preferencia_musical[]" value="sertanejo">Sertanejo <br>
        <input type="checkbox" name="preferencia_musical[]" value="gospel">Gospel <br>
        <input type="checkbox" name="preferencia_musical[]" value="samba">Samba <br>
        <input type="checkbox" name="preferencia_musical[]" value="Pagode">Pagode <br>
    </div>
    <div>
        <label>Sexo</label> <br>
        <input type="radio" name="sexo" value="masculinho">Masculino <br>
        <input type="radio" name="sexo" value="feminino">Feminino <br>        
    </div>
    <label for="senha">Senha</label>
    <input type="nome" name="senha" id="senha" value="">
    <label for="conifrmacao_senha">Confirmação da Senha</label>
    <input type="nome" name="confirmacao_senha" id="conifrmacao_senha" value="">
    
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
@stop