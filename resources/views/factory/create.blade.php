@extends('layouts.master')
@section('head-tag')
<title>فاکتور</title>
@endsection
@section('content')
<div class="content-body">
   <!-- Page Headings Start -->
   <div class="row justify-content-between align-items-center mb-10">
      <!-- Page Heading Start -->
      <div class="col-12 col-lg-auto mb-20">
         <div class="page-heading">
            <h3>افلاطون <span>/ ایجاد فاکتور</span></h3>
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
               <h3 class="title">ایجاد فاکتور جدید</h3>
            </div>
            <form action="{{ route('admin.factories.store')}}" method="post">
                @csrf
               <div class="box-body">
                  <div class="row mbn-20">
                     <!--Form Field-->
                     <div class="col-6 mb-15"><input name="title" type="text" class="form-control" placeholder="عنوان فاکتور"></div>
                     <div class="col-6 mb-15"><input name="full_name" type="text" class="form-control" placeholder="نام گیرنده فاکتور"></div>
                     {{-- <div class="col-lg-4 col-12 mb-20">
                        <h6 class="mb-15">محصولات</h6>
                        <select class="form-control" multiple name="products[]">
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                 </div>
               </div>
               <div style="float: left">
               <button type="submit" class="button button-info"><span>ثبت فاکتور</span></button>
               </div>
            </form>
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
