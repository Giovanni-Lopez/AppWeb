@extends('layout.app')
@section('title', 'Agregar Nuevo Categoria')
@section('heading', 'Nueva Categoria')
@section('link_text', 'Proyectos')
@section('link', '/proyects')
@section('y_text', 'Categoria')
@section('y', '/category')
@section('content')
    <div class="row my-3">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-success">
                    <h3 class="text-light fw-bold">Nueva Categoria</h3>
                </div>
                <div class="card-body p-4">
                    <form action="/category" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-2">
                            <input type="text" name="nombre" id="nombre"
                                class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre" value="{{ old('nombre') }}">

                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-2">
                            <input type="submit" value="Add Post" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
