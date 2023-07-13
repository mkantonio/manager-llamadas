@extends('layout')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    {{-- <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> --}}
@endsection

{{-- @section('content-title')
    <h1>Registro de nueva Llamada</h1>
@endsection --}}

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- general form elements -->
                        <form action="{{ route('llamadas.store', $llamada) }}" method="POST">
                            @csrf @method('POST')

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de nueva Llamada</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <!-- EESS -->
                                            <div class="form-group col-md-6">
                                                <label for="eessList">EESS</label>
                                                <input type="text" list="eessLista" id="eess_id" name="eess"
                                                    tabindex="1" class="form-control col-md-6" autocomplete="off">
                                                <datalist id="eessLista">
                                                    @foreach ($eessNombres as $eess)
                                                        <option >{{ $eess->nombre }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <!-- Telefono -->
                                            <div class="form-group col-md-6">
                                                <label for="telefonoLista">Telefono</label>
                                                <input type="text" list="telefonoLista" id="telefono_id" name="telefono"
                                                    tabindex="2" class="form-control col-md-6" autocomplete="off">
                                                <datalist id="telefonoLista">
                                                    @foreach ($telefonos as $telefono)
                                                        <option >{{ $telefono->telefono }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <!-- Operador -->
                                            <div class="form-group col-md-3">
                                                <label for="operadoresLista">Operador</label>
                                                <input type="text" list="operadoresLista" id="operador_id" name="operador"
                                                    tabindex="3" class="form-control col-md" autocomplete="off">
                                                <datalist id="operadoresLista">
                                                    @foreach ($operadores as $operador)
                                                        <option >{{ $operador->nombre }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <!-- Categoria -->
                                            <div class="form-group col-md-3">
                                                <label for="categoriaLista">Categoría</label>
                                                <input type="text" list="categoriaLista" id="categoria_id" name="categoria"
                                                    tabindex="4" class="form-control col-md" autocomplete="off">
                                                <datalist id="categoriaLista">
                                                    @foreach ($categorias as $categoria)
                                                        <option >{{ $categoria->nombre }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <!-- Estado -->
                                            <div class="form-group col-md-3">
                                                <label for="estadoLista">Estado</label>
                                                <input type="text" list="estadoLista" id="estado_id" name="estado"
                                                    tabindex="5" class="form-control col-md" autocomplete="off">
                                                <datalist id="estadoLista">
                                                    @foreach ($estados as $estado)
                                                        <option >{{ $estado->nombre }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>                                            
                                        </div>
                                        <div class="form-row">
                                            <!-- Descripcion -->
                                            <div class="form-group col-12">
                                                <label for="descripcion">Descripcion</label>
                                                <textarea name="descripcion" id="descripcion_id" cols="30" rows="3" tabindex="6" class="form-control col-md"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Crear Registro de Llamada</button>
                                        <a href="{{ route('llamadas.index') }}" class="btn btn-danger">Cancelar</a>
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
    <!-- Select2 -->
    {{-- <script src="/plugins/select2/js/select2.full.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('.select2bs4').select2({
                theme: 'bootstrap4',
                placeholder: {
                    id: '-1', // the value of the option
                    text: 'Select an option'
                },
                allowClear: true

            });



            let elementoBlanco = document.querySelector('.card .card-body');
            elementoBlanco.click();

            $('.select2bs4').on('keydown', function(e) {
                if (e.keyCode === 9) { // Código de la tecla TAB
                    $(this).select2('open');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector("#eess_id").focus();

            // let input = document.getElementById('eess_id');
            // input.focus();
        });
    </script>
@endsection
