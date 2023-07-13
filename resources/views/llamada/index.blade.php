@extends('layout')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content-title')
    <div>
        <div class="d-flex bd-highlight">
            <div class="p-2 w-100 bd-highlight">
                <h1>Registros de Llamadas</h1>
            </div>
            <div class="p-2 flex-shrink-1 bd-highlight"><a href="{{ route('llamadas.create') }}"
                    class="btn btn-primary btn-sm">Nuevo registro de Llamada</a></div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>EESS</th>
                                        <th>Telf</th>
                                        <th>Operador</th>
                                        <th>Estado</th>
                                        <th>Categoría</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($llamadas as $llamada)
                                        <tr>
                                            <td>{{ $llamada->id }}</td>
                                            <td>{{ $llamada->eess->nombre }}</td>
                                            <td>{{ $llamada->telefono->telefono }}</td>
                                            <td>{{ $llamada->operador->nombre }}</td>
                                            <td>{{ $llamada->estado->nombre }}</td>
                                            <td>{{ $llamada->categoria->nombre }}</td>
                                            <td>{{ $llamada->descripcion }}</td>
                                            <td>{{ $llamada->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('llamadas.edit', $llamada) }}"
                                                    class="btn btn-outline-primary btn-sm"><i
                                                        class="fa fa-pen"></i>Editar</a>
                                                <form action="{{ route('llamadas.destroy', $llamada) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                            class="fa fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nro</th>
                                        <th>EESS</th>
                                        <th>Telf</th>
                                        <th>Operador</th>
                                        <th>Estado</th>
                                        <th>Categoría</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
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
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
