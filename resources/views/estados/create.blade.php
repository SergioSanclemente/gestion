
@extends('problemas.layout')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Estado de plataforma</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="#">Ir atras</a>
            </div>
        </div>
</div>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hubo algunos problemas con tu entrada..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{route('store-data-state')}}" method="POST" enctype="multipart/form-data">
   @csrf
    <div class="form-group">
        <label for="cliente_id">Cliente:</label>
        @if(count($clientes) > 0)
            <select name="cliente_id" class="form-control" id="cliente_id"  onchange="actualizarPlataformas()">
                <option value="-1">Seleccione un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" data-cliente-id="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        @endif
    </div>
    <div class="form-group">
        <label for="plataforma_id">Plataforma:</label>
        <select name="plataforma_id" class="form-control" id="plataforma_id">
            <option value="-1">Seleccione una plataforma</option>
            @foreach($plataformas as $plataforma)
                <option value="{{ $plataforma->id }}" data-cliente-id="{{ $plataforma->cliente_id }}">{{ $plataforma->nombre }}</option>
            @endforeach
        </select>
        
        
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Estado </label>
        <select class="form-control" name="estado" id="estado" rows="3">
            <option value="operando">Operando</option>
            <option value="caido">Caido</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


<script>
   function actualizarPlataformas() {
    var clienteId = document.getElementById("cliente_id").value;
    var plataformaSelect = document.getElementById("plataforma_id");

    for (var i = 0; i < plataformaSelect.options.length; i++) {
        var opcion = plataformaSelect.options[i];

        if (opcion.getAttribute("data-cliente-id") == clienteId) {
            opcion.style.display = "";
        } else {
            opcion.style.display = "none";
        }
    }

    // Actualizar el valor del campo de plataforma con la primera opción visible
    var primeraOpcionVisible = plataformaSelect.querySelector("option:not([style*='none'])");
    if (primeraOpcionVisible) {
        plataformaSelect.value = primeraOpcionVisible.value;
    }
}


</script>