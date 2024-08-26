<h1>Listagem dos SUportes</h1>

<a href="{{ route('suportes.create') }}">Criar Suporte</a>


<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($suportes->items() as $suporte)
            <tr>
                <td>{{ $suporte->subject }}</td>
                <td>{{ getStatusSuporte($suporte->status)}}</td>
                <td>{{ $suporte->body}}</td>
                <td>
                    <a href="{{ route('suportes.show', $suporte->id) }}">Detalhes</a>
                    <a href="{{  route('suportes.edit', $suporte->id)   }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination :paginator="$suportes"
:appends="$filters"  />
