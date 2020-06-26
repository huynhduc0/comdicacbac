<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Cây trồng <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('tree.create') }}">Thêm mới</a></li>
                        <li><a href="{{ route('tree.index') }}">Danh sách</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-delta"></i> <span> Dung dịch <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ route('solution.index') }}">Danh sách cây trồng với dung dịch</a></li>
                        <li><a href="s">Thêm mới thiết đặt</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->