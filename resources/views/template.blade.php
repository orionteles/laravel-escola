<h1>Template Blade</h1>

<p>{{$nome}}</p>

<ul>
    @foreach($aCarros as $carro)
        <li>{{$carro}}</li>
    @endforeach
</ul>

@if($nota < 5)
    <p>Reprovado com nota {{$nota}}</p>
@elseif($nota < 7)
    <p>Em recuperação com nota {{$nota}}</p>
@else
    <p>Aprovado com nota {{$nota}}</p>
@endif
