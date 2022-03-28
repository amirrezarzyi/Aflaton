@extends('layouts.master')
@section('head-tag')
    <title>فاکتورها</title>
@endsection
@section('content')
    <div class="content-body">
        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">
            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>افلاطون <span>/ مشاهده فاکتور</span></h3>
                </div>
            </div>
            <!-- Page Heading End -->
        </div>
        <!-- Page Headings End -->
        <div class="row">
            <!--Form controls Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">مشاهده فاکتور </h3>
                    </div>
                    <div class="box-body">
                        <div class="row mbn-20">
                            <div class="col-6 mb-15"><input name="title" type="text" class="form-control"
                                    value="{{ $factory->title }}" disabled></div>
                            <div class="col-6 mb-15"><input name="full_name" type="text" class="form-control"
                                    value="{{ $factory->full_name }}" disabled></div>
                            <div class="box-body">
                                <table class="table table-bordered  ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام محصول</th>
                                            <th>قیمت محصول</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    <form class="d-inline" method="post" action="{{ route('admin.factories.deleteProduct', [$product->id, $factory]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm"><span
                                                                class="ti-close"></span> حذف از فاکتور</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Form controls End-->
        </div>

    </div>
    <!-- Content Body End -->
@endsection
@section('script')
    <!-- JS
       ============================================ -->
    <!-- Plugins & Activation JS For Only This Page -->
    <script src="{{ asset('assets/js/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/datatables.active.js') }}"></script>
@endsection
