@extends('admin.master')
@section('title', 'Dashboard')
@section('content')
    <!-- Begin page -->

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
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Welcome to Thủy canh Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="page-content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 border-right">
                                    <h4 class="mt-0 header-title mb-4">Theo dõi máy bơm</h4>
                                    <div id="morris-area-example" class="dashboard-charts morris-charts"></div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>

                </div>
                <!-- end page content-->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        
        @include('admin.footer')
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    @section('js')
    <script>
        !function($) {
    "use strict";

    var Dashboard = function() {};
    
    //creates area chart
    Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 0,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            gridLineColor: '#eee',
            hideHover: 'auto',
            lineColors: lineColors,
            fillOpacity: .7,
            behaveLikeLine: true
        });
    },

     //pie
        $('.peity-pie').each(function () {
            $(this).peity("pie", $(this).data());
        });

        //donut
        $('.peity-donut').each(function () {
            $(this).peity("donut", $(this).data());
        });

  
    
    Dashboard.prototype.init = function() {
        
        //creating area chart
        var $areaData = [
            { y: '2020-06-20', a: {{ count($pump1) }}, b: {{ count($pump2) - 1 }}, c: {{ count($pump3) }} },
            { y: '2020-06-21', a: {{ count($pump1) }}, b: {{ count($pump2) + 1 }}, c: {{ count($pump3) }} },
            { y: '2020-06-22', a: {{ count($pump1) }}, b: {{ count($pump2) }}, c: {{ count($pump3) }} },
            { y: '2020-06-23', a: {{ count($pump1) }}, b: {{ count($pump2) }}, c: {{ count($pump3) }} },
            { y: '2020-06-24', a: {{ count($pump1) }}, b: {{ count($pump2) }}, c: {{ count($pump3) }} },
            { y: '2020-06-25', a: {{ count($pump1) }}, b: {{ count($pump2) }}, c: {{ count($pump3) }} }
        ];
        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b', 'c'], ['Máy bơm 1', 'Máy bơm 2', 'Máy bơm 3'], ['#ccc', '#f16c69', '#28bbe3']);

    },
    //init
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);
    </script>
    @endsection
@endsection

