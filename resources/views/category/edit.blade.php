@extends('layout.app')
@section('title', 'Edit Category')
@section('heading', 'Edit This Category')
@section('link_text', 'Proyectos')
@section('link', '/proyects')
@section('y_text', 'Categoria')
@section('y', '/category')
@section('content')
    <div class="row my-3">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-primary">
                    <h3 class="text-light fw-bold">Edit Category</h3>
                </div>
                <div class="card-body p-4">
                    <form action="/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-2">
                            <input type="text" name="nombre" value=" {{$category->nombre}} " id="nombre" class="form-control" placeholder="Title" required>

                        </div>
                        <div class="my-2">
                            <input type="submit" value="Update Category" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
