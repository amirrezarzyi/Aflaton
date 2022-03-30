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
                            <div class="box-body">
                                <ul class="list-group">
                                    <li class="list-group-item alert alert-dark m-1">
                                        <h4>شماره فاکتور : {{ $factory->code }}</h4>
                                    </li>
                                    <li class="list-group-item alert alert-warning m-1">
                                        <h5>عنوان فاکتور :
                                            {{ $factory->title }}
                                        </h5>
                                    </li>
                                    <li class="list-group-item alert alert-warning m-1">
                                        <h5> گیرنده فاکتور :
                                            {{ $factory->full_name }}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="box-head">
                                    <a href="{{ route('admin.items.create', $factory->id) }}"
                                        class="btn btn-outline-primary btn-sm">اضافه کردن
                                        محصول</a>
                                </div>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام محصول</th>
                                            <th>قیمت محصول</th>
                                            <th>تعداد</th>
                                            <th>قیمت کل (تومان)</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->number }}</td>
                                                <td>{{ number_format($product->amount, 3) }}</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                                                        data-target="#product-Modal{{ $product->id }}"
                                                        data-whatever="@mdo">
                                                        <span class="zmdi zmdi-edit"> ویرایش </a>
                                                    <form class="d-inline" method="post"
                                                        action="{{ route('admin.items.destroy', [$product->id, $factory->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                                            <span class="zmdi zmdi-delete"></span> حذف </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="product-Modal{{ $product->id }}">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">ویرایش کالا</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.items.update',$product->id) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">نام
                                                                        محصول:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name"
                                                                        value="{{ $product->product->name }}" disabled>
                                                                </div>
                                                                <div class="row">
                                                                    <div class=" col-md-6 form-group">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">قیمت
                                                                            محصول:</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name"
                                                                            name="price"
                                                                            value="{{ $product->price }}">
                                                                    </div>
                                                                    <div class=" col-md-6 form-group">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">تعداد
                                                                            :</label>
                                                                        <input type="number" class="form-control"
                                                                            id="recipient-name"
                                                                            name="number"
                                                                            value="{{ $product->number }}">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="button button-danger"
                                                                        data-dismiss="modal">بستن</button>
                                                                    <button class="button button-primary" type="submit">ذخیره
                                                                        تغییرات</button>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>جمع</th>
                                            <th>{{ number_format($prices, 3) }}</th>
                                            <th>{{ $numbers }}</th>
                                            <th>{{ number_format($amounts, 3) }}</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </tfoot>
                                    <tfoot style="background-color: rgb(209, 209, 209);">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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
