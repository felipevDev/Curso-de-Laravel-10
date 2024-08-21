<h1>Novo Suporte</h1>
<x-alert/>


<form action="{{  route('suportes.store')  }}" method="POST">
    @include('admin.suportes.partials.form')
</form>
