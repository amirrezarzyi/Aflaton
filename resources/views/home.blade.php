@extends('layouts.master')
@section('head-tag')
<title>داشبورد</title>
@endsection
@section('content')
<!-- Content Body Start -->
<div class="content-body">
   <!-- Page Headings Start -->
   <div class="row justify-content-between align-items-center mb-10">
      <!-- Page Heading Start -->
      <div class="col-12 col-lg-auto mb-20">
         <div class="page-heading">
            <h3>داشبورد <span></span></h3>
         </div>
      </div>
      <!-- Page Heading End -->
      <!-- Page Button Group Start -->
      <div class="col-12 col-lg-auto mb-20">
         <div class="page-date-range">
            <input type="text" class="form-control input-date-predefined">
         </div>
      </div>
      <!-- Page Button Group End -->
   </div>
   <!-- Page Headings End -->
   <!-- Top Report Wrap Start -->
   <div class="row">
      <!-- Top Report Start -->
      <div class="col-xlg-3 col-md-6 col-12 mb-30">
         <div class="top-report">
            <!-- Head -->
            <div class="head">
               <h4>مجموع بازدید کننده</h4>
               <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>
            <!-- Content -->
            <div class="content">
               <h5>امروزه</h5>
               <h2>100,560.00</h2>
            </div>
            <!-- Footer -->
            <div class="footer">
               <div class="progess">
                  <div class="progess-bar" style="width: 92%;"></div>
               </div>
               <p>92٪ از بازدید کننده منحصر به فرد</p>
            </div>
         </div>
      </div>
      <!-- Top Report End -->
      <!-- Top Report Start -->
      <div class="col-xlg-3 col-md-6 col-12 mb-30">
         <div class="top-report">
            <!-- Head -->
            <div class="head">
               <h4>محصولات فروخته شده</h4>
               <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>
            <!-- Content -->
            <div class="content">
               <h5>امروزه</h5>
               <h2>85,000.00</h2>
            </div>
            <!-- Footer -->
            <div class="footer">
               <div class="progess">
                  <div class="progess-bar" style="width: 98%;"></div>
               </div>
               <p>98٪ بازدید کننده منحصر به فرد</p>
            </div>
         </div>
      </div>
      <!-- Top Report End -->
      <!-- Top Report Start -->
      <div class="col-xlg-3 col-md-6 col-12 mb-30">
         <div class="top-report">
            <!-- Head -->
            <div class="head">
               <h4>سفارش دریافت شد</h4>
               <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>
            <!-- Content -->
            <div class="content">
               <h5>امروزه</h5>
               <h2>5,000.00</h2>
            </div>
            <!-- Footer -->
            <div class="footer">
               <div class="progess">
                  <div class="progess-bar" style="width: 88%;"></div>
               </div>
               <p>88٪ از بازدید کننده منحصر به فرد</p>
            </div>
         </div>
      </div>
      <!-- Top Report End -->
      <!-- Top Report Start -->
      <div class="col-xlg-3 col-md-6 col-12 mb-30">
         <div class="top-report">
            <!-- Head -->
            <div class="head">
               <h4>درآمد کل</h4>
               <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>
            <!-- Content -->
            <div class="content">
               <h5>امروزه</h5>
               <h2>3,000,000.00</h2>
            </div>
            <!-- Footer -->
            <div class="footer">
               <div class="progess">
                  <div class="progess-bar" style="width: 76%;"></div>
               </div>
               <p>76٪ از بازدید کننده منحصر به فرد</p>
            </div>
         </div>
      </div>
      <!-- Top Report End -->
   </div>
   <!-- Top Report Wrap End -->
   <div class="row mbn-30">
      <!-- Recent Transaction Start -->
      <div class="col-12 mb-30">
         <div class="box">
            <div class="box-head">
               <h4 class="title">معامله اخیر</h4>
            </div>
            <div class="box-body">
               <div class="table-responsive">
                  <table class="table table-vertical-middle table-selectable">
                     <!-- Table Head Start -->
                     <thead>
                        <tr>
                           <th class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></th>
                           <!--<th class="selector h5"><button class="button-check"></button></th>-->
                           <th><span>تصویر</span></th>
                           <th><span>نام محصول</span></th>
                           <th><span>شناسه</span></th>
                           <th><span>تعداد</span></th>
                           <th><span>قیمت</span></th>
                           <th><span>وضعبت</span></th>
                           <th></th>
                        </tr>
                     </thead>
                     <!-- Table Head End -->
                     <!-- Table Body Start -->
                     <tbody>
                        <tr>
                           <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                           <td><img src="assets/images/product/list-product-1.jpg" alt="" class="table-product-image rounded-circle"></td>
                           <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                           <td>#MSP40022</td>
                           <td>05 - محصولات</td>
                           <td>60000000.00 تومان</td>
                           <td><span class="badge badge-success">پرداخت شده</span></td>
                           <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                        </tr>
                        <tr class="selected">
                           <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                           <td><img src="assets/images/product/list-product-2.jpg" alt="" class="table-product-image rounded-circle"></td>
                           <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                           <td>#MSP40022</td>
                           <td>05 - محصولات</td>
                           <td>60000000.00 تومان</td>
                           <td><span class="badge badge-success">پرداخت شده</span></td>
                           <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                        </tr>
                        <tr>
                           <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                           <td><img src="assets/images/product/list-product-3.jpg" alt="" class="table-product-image rounded-circle"></td>
                           <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                           <td>#MSP40022</td>
                           <td>05 - محصولات</td>
                           <td>60000000.00 تومان</td>
                           <td><span class="badge badge-warning">مشکل دار</span></td>
                           <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                        </tr>
                        <tr>
                           <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                           <td><img src="assets/images/product/list-product-4.jpg" alt="" class="table-product-image rounded-circle"></td>
                           <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                           <td>#MSP40022</td>
                           <td>05 - محصولات</td>
                           <td>60000000.00 تومان</td>
                           <td><span class="badge badge-danger">رد</span></td>
                           <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                        </tr>
                     </tbody>
                     <!-- Table Body End -->
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Recent Transaction End -->
   </div>
</div>
<!-- Content Body End -->
@endsection
@section('script')
<!-- Plugins & Activation JS For Only This Page -->
<!--Moment-->
<script src="{{ asset('assets/js/plugins/moment/moment.min.js') }}"></script>
<!--Date-range Picker-->
<script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>
<!--Echarts-->
<script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chartjs/chartjs.active.js') }}"></script>
<!--VMap-->
<script src="{{ asset('assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('assets/js/plugins/vmap/vmap.active.js') }}"></script>
@endsection
