@extends('admin.master')
@section('title', 'Thêm mới cây trồng')
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
                                    <h4 class="page-title">Thêm mới cây trồng</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Thêm mới cây trồng</h4>
            
                                            <form action="{{ route('tree.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tên cây trồng</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="tencay" placeholder="Nhập tên cây trồng">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-sm-2 col-form-label">Phút mỗi lượt</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="search" name="phutmoilan" placeholder="Nhập số phút mỗi lần">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label">Trễ mỗi lượt</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="delaymoilan" placeholder="Nhập số trễ mỗi lần">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-url-input" class="col-sm-2 col-form-label">A trễ</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Adelay" placeholder="Nhập số trễ A">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-tel-input" class="col-sm-2 col-form-label">B Trễ</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="Bdelay" placeholder="Nhập số trễ B">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-password-input" class="col-sm-2 col-form-label">Hình ảnh</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="url" name="hinhloaicay" placeholder="Nhập url ảnh">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-sm-2 col-form-label">Nội dung</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="content" placeholder="Nhập nội dung hiển thị trên app" rows="5"></textarea>
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