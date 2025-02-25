@extends('master.index')
@section('content')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Committee Flot Chart</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Donut Pie</h4>

                                <div id="donut-chart">
                                    <div id="donut-chart-container" class="flot-chart mt-5" style="height: 350px;"></div>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Stacked Bar chart</h4>

                                <div id="ordered-bars-chart" style="height: 350px;" class="mt-5"></div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Line Chart</h4>

                                <div id="line-chart-alt" class="mt-5" style="height:350px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Combine Chart</h4>

                                <div id="combine-chart">
                                    <div id="combine-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Multiple Statistics</h4>

                                <div id="website-stats" style="height: 350px;" class="flot-chart mt-5"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Realtime Statistics</h4>

                                <div id="flotRealTime" style="height: 350px;" class="flot-chart mt-5"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Line Chart</h4>

                                <div id="website-stats1" style="height: 350px;" class="flot-chart mt-5"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Pie Chart</h4>

                                <div id="pie-chart">
                                    <div id="pie-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->   
@endsection