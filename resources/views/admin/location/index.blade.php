@extends('adminlte::page')

@section('title', 'Location')

@section('content_header')
    <h1>Location</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                </div>

                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2"
                                       class="table table-bordered table-hover dataTable dtr-inline collapsed"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Rendering
                                            engine
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Browser
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="">Platform(s)
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                                            style="display: none;">Engine version
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                            style="display: none;">CSS grade
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                        <td>Firefox 1.0</td>
                                        <td style="">Win 98+ / OSX.2+</td>
                                        <td style="display: none;">1.7</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                        <td>Firefox 1.5</td>
                                        <td style="">Win 98+ / OSX.2+</td>
                                        <td style="display: none;">1.8</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                        <td>Firefox 2.0</td>
                                        <td style="">Win 98+ / OSX.2+</td>
                                        <td style="display: none;">1.8</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                        <td>Firefox 3.0</td>
                                        <td style="">Win 2k+ / OSX.3+</td>
                                        <td style="display: none;">1.9</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1 dtr-control">Gecko</td>
                                        <td>Camino 1.0</td>
                                        <td style="">OSX.2+</td>
                                        <td style="display: none;">1.8</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1 dtr-control">Gecko</td>
                                        <td>Camino 1.5</td>
                                        <td style="">OSX.3+</td>
                                        <td style="display: none;">1.8</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1 dtr-control">Gecko</td>
                                        <td>Netscape 7.2</td>
                                        <td style="">Win 95+ / Mac OS 8.6-9.2</td>
                                        <td style="display: none;">1.7</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1 dtr-control">Gecko</td>
                                        <td>Netscape Browser 8</td>
                                        <td style="">Win 98SE+</td>
                                        <td style="display: none;">1.7</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1 dtr-control">Gecko</td>
                                        <td>Netscape Navigator 9</td>
                                        <td style="">Win 98+ / OSX.2+</td>
                                        <td style="display: none;">1.8</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1 dtr-control">Gecko</td>
                                        <td>Mozilla 1.0</td>
                                        <td style="">Win 95+ / OSX.1+</td>
                                        <td style="display: none;">1</td>
                                        <td style="display: none;">A</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rendering engine</th>
                                        <th rowspan="1" colspan="1">Browser</th>
                                        <th rowspan="1" colspan="1" style="">Platform(s)</th>
                                        <th rowspan="1" colspan="1" style="display: none;">Engine version</th>
                                        <th rowspan="1" colspan="1" style="display: none;">CSS grade</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
