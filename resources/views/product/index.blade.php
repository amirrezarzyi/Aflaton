@extends('layouts.master')

@section('head-tag')
    <title>محصولات</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">محصولات</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{Route('admin.products.create')}}" class="btn btn-primary"><span class="ti-plus"></span> ایجاد محصول جدید</a>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام محصول</th>
                                <th>قیمت محصول</th>
                                <th>تاریخ ثبت</th>
                                <th>تاریخ ویرایش</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>{{$product->updated_at}}</td>
                                <td>
                                    <a href="{{route('admin.products.show',$product->id)}}" class="btn btn-outline-info btn-sm"><span class="ti-user"></span> نمایش</a>
                                    <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-outline-success btn-sm"><span class="ti-reload"></span> ویرایش</a>
                                    <form action="{{route('admin.products.destroy',$product->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><span class="ti-close"></span> حذف</a>
                                    </form>
                                    </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--Default Data Table End-->

        </div>

    </div><!-- Content Body End -->
@endsection
@section('script')

    <!-- JS
============================================ -->

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="{{ asset('assets/js/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/datatables.active.js') }}"></script>

@endsection
