<h1>Detalhes do Suporte {{ $suporte->id }}</h1>

<ul>
    <li>{{ $suporte->subject }}</li>
    <li>{{ $suporte->body }}</li>
    <li>{{ $suporte->status }}</li>
</ul>

<form action="{{  route('suportes.destroy', $suporte->id)  }}" method="POST">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
