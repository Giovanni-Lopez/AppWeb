@extends('layout.app')
@section('title', 'Pagina Principal')
@section('heading', 'Todos los proyectos')
@section('link_text', 'Nuevo Proyecto')
@section('link', '/proyects/create')
@section('y_text', 'Nueva Categoria')
@section('y', '/category/create')
@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria- label="Close"></button>

        </div>
    @endif


    <div class="row g-4 mt-1">

        <table class="table table-bordered" >
            <thead class="table-info">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($category as $c)
                    <tr>
                        <td>
                            {{ $c->id }}
                        </td>

                        <td>
                            {{ $c->nombre }}
                        </td>
                    <td>


                        <a href="/category/{{ $c->id }}/edit" class="btn btn-outline-info">
                            <i class="fa-solid fa-pen-to-square fa-2x"></i>
                        </a>


                        <!-- Button trigger modal -->
                        <a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fa-solid fa-trash-can fa-2x"></i>
                        </a>




                    </td>

                    </tr>
                @empty
                    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
                @endforelse

            </tbody>
        </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Atención</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseas Eliminar ¿?
                </div>
                <div class="modal-footer">

                    <form action="/category/{{ $c->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="color:white; text-decoration: none">
                            <i class="fa-solid fa-circle-check"></i>
                        Confirmar</button>
                    </form>

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Cancelar</button>
                </div>
            </div>
        </div>
    </div>


































@endsection
