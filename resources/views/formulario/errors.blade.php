<ul>
    @foreach($messages->all() as $message)
        <li>{{$message}}</li>
    @endforeach
</ul>
<a href="{{action("FormularioController@create")}}">Formulario</a>