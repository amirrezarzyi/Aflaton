@extends('layouts.master')

@section('head-tag')
    <title>فاکتورها</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">فاکتورها</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{Route('admin.factories.create')}}" class="btn btn-primary"><span class="ti-plus"></span> ایجاد فاکتور جدید</a>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان فاکتور</th>
                                <th>شخص/شرکت</th>
                                <th>شماره فاکتور</th>
                                <th>تاریخ ثبت فاکتور</th>
                                <th>تاریخ ویرایش</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($factories as $factory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$factory->title}}</td>
                                <td>{{$factory->full_name}}</td>
                                <td>{{$factory->code}}</td>
                                <td>{{$factory->created_at}}</td>
                                <td>{{$factory->updated_at}}</td>
                                <td>
                                    <a href="{{route('admin.factories.show',$factory->id)}}" class="btn btn-outline-info btn-sm"><span class="ti-user"></span> نمایش</a>
                                    <a href="{{route('admin.factories.edit',$factory->id)}}" class="btn btn-outline-success btn-sm"><span class="ti-reload"></span> ویرایش</a>
                                    <form action="{{route('admin.factories.destroy',$factory->id)}}" method="post" class="d-inline">
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
