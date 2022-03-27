@extends('layouts.master')
@section('head-tag')
<title>محصولات</title>
@endsection
@section('content')
<div class="content-body">
   <!-- Page Headings Start -->
   <div class="row justify-content-between align-items-center mb-10">
      <!-- Page Heading Start -->
      <div class="col-12 col-lg-auto mb-20">
         <div class="page-heading">
            <h3>افلاطون <span>/ ایجاد محصول</span></h3>
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
               <h3 class="title">ایجاد محصول جدید</h3>
            </div>
            <form action="">
               <div class="box-body">
                  <div class="row mbn-20">
                     <!--Form Field-->
                     <div class="col-6 mb-15"><input name="name" type="text" class="form-control" placeholder="نام محصول"></div>
                     <div class="col-6 mb-15"><input name="price" type="number" class="form-control" placeholder="قیمت (تومان)"></div>
                     <div class="col-12 mb-15"><textarea name="description" class="form-control" placeholder="توضیحات مربوطه به محصول"></textarea></div>
                  </div>
               </div>
               <div style="float: left; ">
               <button class="button button-info"><span>ثبت محصول</span></button>
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
