@extends("layout.principal")
@section("conteudo")
<table>
    @foreach($produtos as $p)
    <tr>
        <td>{{$p->nome}}</td>
        <td>{{$p->descricao}}</td>
        <td>{{$p->preco}}</td>
    </tr>
    @endforeach    
</table>
@stop