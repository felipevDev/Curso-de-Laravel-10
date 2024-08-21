<h1>Suporte {{ $suporte->id }}</h1>

<x-alert/>

<form action="{{  route('suportes.update', $suporte->id)  }}" method="POST">
    @csrf()
    @method('PUT')
    @include('admin.suportes.partials.form', ['suporte' => $suporte])
</form>
