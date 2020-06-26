@extends('admin.master')
@section('title', 'Chỉnh sửa cây trồng')
@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Chỉnh sửa cây trồng</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Chỉnh sửa cây trồng</h4>
            
                                            <form action="{{ route('tree.update', $cay->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tên cây trồng</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="tencay" value="{{ $cay->tencay }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-sm-2 col-form-label">Phút mỗi lượt</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="search" name="phutmoilan" value="{{ $cay->phutmoilan }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label">Trễ mỗi lượt</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="delaymoilan" value="{{ $cay->delaymoilan }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-url-input" class="col-sm-2 col-form-label">A trễ</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Adelay" value="{{ $cay->Adelay }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-tel-input" class="col-sm-2 col-form-label">B Trễ</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="Bdelay" value="{{ $cay->Bdelay }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-password-input" class="col-sm-2 col-form-label">Hình ảnh</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="url" name="hinhloaicay" value="{{ $cay->hinhloaicay }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-sm-2 col-form-label">Nội dung</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="content" rows="5">{{ $cay->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> 
                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                                </div>
                                            </form>
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