@extends('layout')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content-title')
    Editar Categoria
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- general form elements -->
                        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
                            @csrf @method('PATCH')

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Categorias</label>
                                            <select name="nombre" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                <option selected>{{ $categoria->nombre }}</option>
                                                @foreach ($categoriasNombres as $categoriaNombre)
                                                    <option>{{ $categoriaNombre->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea name="descripcion" class="form-control" rows="3" placeholder="">{{ old('descripcion', $categoria->descripcion) }}</textarea>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <a href="{{ route('categorias.index') }}" class="btn btn-danger">Cancelar</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js')
@endsection
