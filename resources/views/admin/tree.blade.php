@extends('admin.master')
@section('title', 'Danh sách cây trồng')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Table</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Danh sách cây trồng</h4>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Cây</th>
                                        <th>Hình ảnh</th>
                                        <th>Số phút</th>
                                        <th>Thời gian trễ</th>
                                        <th>A Trễ</th>
                                        <th>B Trễ</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                        @foreach($trees as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->tencay }}</td>
                                            <td>
                                                <img src="{{ $value->hinhloaicay }}" class="img-fluid" alt="{{ $value->tencay }}">
                                            </td>
                                            <td>{{ $value->phutmoilan }}</td>
                                            <td>{{ $value->delaymoilan }}</td>
                                            <td>{{ $value->Adelay }}</td>
                                            <td>{{ $value->Bdelay }}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
            <!-- end page content-->

        </div> <!-- container-fluid -->

    </div> <!-- content -->

    @include('admin.footer')

</div>
@endsection
@section('js')
<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>
@endsection