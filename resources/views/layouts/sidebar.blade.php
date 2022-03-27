<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">
        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a href="{{ route('admin.home')}}"><i class="ti-home"></i> <span>داشبورد</span></a></li>
                <li class="{{ (request()->is('admin/products')) ? 'active' : '' }}"><a href="{{ route('admin.products.index')}}"><i class="ti-package"></i> <span>محصولات</span></a></li>
                <li class="{{ (request()->is('admin/factories')) ? 'active' : '' }}"><a href="{{ route('admin.factories.index')}}"><i class="ti-package"></i> <span>قراردادها</span></a></li>

            </ul>
        </nav>
    </div>
    <!-- Side Header Inner End -->
</div>
