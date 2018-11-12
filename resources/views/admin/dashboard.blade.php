@extends('admin.layouts.app')

@section('content')
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-blackberry">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$15,678</h3>
                                            <span>Total Cost</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-bulb font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart"
                                     class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-ibiza-sunset">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$2156</h3>
                                            <span>Total Tax</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-pie-chart font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2"
                                     class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-green-tea">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$45,668</h3>
                                            <span>Total Sales</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-graph font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart3"
                                     class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-pomegranate">
                            <div class="card-body">
                                <div class="card-block pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$32,454</h3>
                                            <span>Total Earning</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart4"
                                     class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Discover People</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media mb-3">
                                        <img alt="96x96"
                                             class="media-object d-flex mr-3 align-self-center bg-primary height-50 rounded-circle"
                                             src="../app-assets/img/portrait/small/avatar-s-12.png">
                                        <div class="media-body">
                                            <h4 class="font-medium-1 mt-2 mb-0">Jessica Rice</h4>
                                        </div>
                                        <a class="d-flex ml-3 btn btn-raised btn-round gradient-blackberry py-2 width-150 justify-content-center white">Following</a>
                                    </div>
                                    <div class="media mb-3">
                                        <img alt="96x96"
                                             class="media-object d-flex mr-3 align-self-center bg-danger height-50 rounded-circle"
                                             src="../app-assets/img/portrait/small/avatar-s-11.png">
                                        <div class="media-body">
                                            <h4 class="font-medium-1 mt-2 mb-0">Jacob Rios</h4>
                                        </div>
                                        <a class="d-flex ml-3 btn btn-raised btn-round btn-outline-grey py-2 width-150 justify-content-center">Follow</a>
                                    </div>
                                    <div class="media mb-3">
                                        <img alt="96x96"
                                             class="media-object d-flex mr-3 align-self-center bg-success height-50 rounded-circle"
                                             src="../app-assets/img/portrait/small/avatar-s-3.png">
                                        <div class="media-body">
                                            <h4 class="font-medium-1 mt-2 mb-0">Russell Diaz</h4>
                                        </div>
                                        <a class="d-flex ml-3 btn btn-raised btn-round btn-outline-grey py-2 width-150 justify-content-center">Follow</a>
                                    </div>
                                    <div class="media mb-3">
                                        <img alt="96x96"
                                             class="media-object d-flex mr-3 align-self-center bg-warning height-50 rounded-circle"
                                             src="../app-assets/img/portrait/small/avatar-s-6.png">
                                        <div class="media-body">
                                            <h4 class="font-medium-1 mt-2 mb-0">Sara Bell</h4>
                                        </div>
                                        <a class="d-flex ml-3 btn btn-raised btn-round gradient-blackberry py-2 width-150 justify-content-center white">Following</a>
                                    </div>
                                    <div class="media mb-3">
                                        <img alt="96x96"
                                             class="media-object d-flex mr-3 align-self-center bg-info height-50 rounded-circle"
                                             src="../app-assets/img/portrait/small/avatar-s-18.png">
                                        <div class="media-body">
                                            <h4 class="font-medium-1 mt-2 mb-0">Janet Lucas</h4>
                                        </div>
                                        <a class="d-flex ml-3 btn btn-raised btn-round btn-outline-grey py-2 width-150 justify-content-center">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Sales Analysis</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="chart-info mb-3">
                                        <span class="text-uppercase mr-3"><i
                                                class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                        <span class="text-uppercase mr-3"><i
                                                class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                                        <span class="text-uppercase"><i
                                                class="fa fa-circle danger font-small-2 mr-1"></i> clicks</span>
                                    </div>
                                    <div id="line-chart1" class="height-350 lineChart1 lineChart1Shadow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header text-center pb-0">
                                <span class="font-medium-2 primary">Steps</span>
                                <h3 class="font-large-2 mt-1">3261</h3>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart1" class="height-250 donut1">
                                </div>
                                <div class="card-block text-center">
                                    <span class="font-large-1 d-block mb-1">5000</span>
                                    <span class="primary font-medium-1">Steps Today's Target</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header text-center pb-0">
                                <span class="font-medium-2 warning">Distance</span>
                                <h3 class="font-large-2 mt-1">7.6
                                    <span class="font-medium-1 grey darken-1 text-bold-400">miles</span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart2" class="height-250 donut2">
                                </div>
                                <div class="card-block text-center">
                                    <span class="font-large-1 d-block mb-1">10</span>
                                    <span class="warning font-medium-1">Miles Today's Target</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header text-center pb-0">
                                <span class="font-medium-2 danger">Calories</span>
                                <h3 class="font-large-2 mt-1">4,025
                                    <span class="font-medium-1 grey darken-1 text-bold-400">kcal</span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart3" class="height-250 donut3">
                                </div>
                                <div class="card-block text-center">
                                    <span class="font-large-1 d-block mb-1">5000</span>
                                    <span class="danger font-medium-1">kcla Today's Target</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img">
                                    <img class="card-img-top img-fluid height-300"
                                         src="../app-assets/img/photos/weather-1.jpg" alt="Card image cap">
                                    <h4 class="card-title">Sunny</h4>
                                    <a class="btn btn-floating halfway-fab bg-primary"><i class="ft-plus"></i></a>
                                </div>
                                <div class="card-block mt-2">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <span class="display-block">Mon</span>
                                            <i class="wi wi-day-sunny display-block warning font-large-1 my-3"></i>
                                            <span class="display-block">13&deg;</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="display-block">Tue</span>
                                            <i class="wi wi-day-cloudy display-block warning font-large-1 my-3"></i>
                                            <span class="display-block">12&deg;</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="display-block">Wed</span>
                                            <i class="wi wi-day-cloudy-gusts display-block warning font-large-1 my-3"></i>
                                            <span class="display-block">10&deg;</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="display-block">Thu</span>
                                            <i class="wi wi-day-cloudy-windy display-block warning font-large-1 my-3"></i>
                                            <span class="display-block">12&deg;</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="display-block">Fri</span>
                                            <i class="wi wi-day-fog display-block warning font-large-1 my-3"></i>
                                            <span class="display-block">9&deg;</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="display-block">Sat</span>
                                            <i class="wi wi-day-lightning display-block warning font-large-1 my-3"></i>
                                            <span class="display-block">6&deg;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Statistics</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="chart-info mb-2">
                                        <span class="text-uppercase mr-3"><i
                                                class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                        <span class="text-uppercase"><i
                                                class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                                    </div>
                                    <div id="line-chart2" class="height-350 lineChart2 lineChart2Shadow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" matchHeight="card">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="row d-flex mb-3 py-2">
                                        <div class="col align-self-center text-center"><i
                                                class="icon-graph font-large-2 blue-grey lighten-2"></i></div>
                                        <div class="col align-self-center"><img alt="96x96"
                                                                                class="bg-danger width-150 rounded-circle img-fluid"
                                                                                src="../app-assets/img/portrait/small/avatar-s-11.png">
                                        </div>
                                        <div class="col align-self-center text-center"><i
                                                class="icon-envelope font-large-2 blue-grey lighten-2"></i></div>
                                    </div>
                                    <h3 class="font-large-1 text-center">Kevin Sullivan</h3>
                                    <span class="font-medium-1 grey d-block text-center">UX Designer</span>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-xl-7 col-8 ">
                                            <div id="Widget-line-chart1"
                                                 class="height-75 WidgetlineChart1 WidgetlineChart1Shadow px-2">
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-4">
                                            <span class="font-large-1"><i
                                                    class="fa fa-caret-up font-large-2 success"></i> 27 %</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="../app-assets/img/photos/17.jpg" class="d-block w-100"
                                                     alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../app-assets/img/photos/13.jpg" class="d-block w-100"
                                                     alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../app-assets/img/photos/12.jpg" class="d-block w-100"
                                                     alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button"
                                           data-slide="prev">
                                            <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button"
                                           data-slide="next">
                                            <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <a class="btn btn-floating halfway-fab btn-large gradient-blackberry"><i
                                            class="ft-plus"></i></a>
                                </div>
                                <div class="card-block mt-3">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Sweet halvah dragée jelly-o halvah carrot cake oat cake. Donut
                                        jujubes jelly chocolate cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Earnings</h4>
                                <span class="grey">Mon 18 - Sun 21</span>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="earning-details mb-4">
                                        <h3 class="font-large-2 mb-1">$4295.36 <i
                                                class="ft-arrow-up font-large-2 teal accent-3"></i></h3>
                                        <span class="font-medium-1 grey d-block">Total Earnings</span>
                                    </div>
                                    <div id="Widget-line-chart22"
                                         class="height-100 WidgetlineChart2 WidgetlineChart2Shadow">
                                    </div>
                                    <div class="action-buttons mt-4 mb-1 text-center">
                                        <a class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2">View Full</a>
                                        <a class="btn btn-raised btn-outline-grey py-2 px-3">Print</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <div class="card card-inverse bg-primary text-center">
                            <div class="card-body">
                                <div class="card-img overlap">
                                    <img src="../app-assets/img/elements/11.png" alt="element 06" width="190"
                                         class="mb-1">
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">New Arrival</h4>
                                    <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <div class="card card-inverse bg-danger text-center">
                            <div class="card-body">
                                <div class="card-img overlap">
                                    <img src="../app-assets/img/elements/14.png" alt="element 03" width="170">
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">Brand Minute</h4>
                                    <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <div class="card card-inverse bg-warning text-center">
                            <div class="card-body">
                                <div class="card-img overlap">
                                    <img src="../app-assets/img/elements/07.png" alt="element 07" width="225">
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">Brand Minute</h4>
                                    <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Sales Per Visit</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="chart-info mb-2">
                                        <span class="text-uppercase mr-3"><i
                                                class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                        <span class="text-uppercase"><i
                                                class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                                    </div>
                                    <div id="line-area-chart" class="height-300 lineAreaChart mb-1">
                                        <!-- <x-chartist class="" [data]="lineAreaChart.data" [type]="lineAreaChart.type" [options]="lineAreaChart.options"
                                            [responsiveOptions]="lineAreaChart.responsiveOptions" [events]="lineAreaChart.events">

                                        </x-chartist> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <h4 class="card-title">DAILY DIET</h4>
                                    <p class="card-text">Some quick example text to build on the card.</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge bg-primary float-right">4</span> Protein Milk
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge bg-info float-right">2</span> oz Water
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge bg-warning float-right">6</span> Vegetable Juice
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge bg-success float-right">1</span> Sugar Free Jello-O
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge bg-danger float-right">3</span> Protein Meal
                                    </li>
                                </ul>
                                <div class="card-block">
                                    <a class="card-link success">Card link</a>
                                    <a class="card-link success">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    {{--


    <!-- START Notification Sidebar-->
    <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a
            class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
        <div class="side-nav notification-sidebar-content">
            <div class="row">
                <div class="col-12 mt-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1"
                                                href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a>
                        </li>
                        <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab"
                                                aria-expanded="false" class="nav-link">Chat</a></li>
                        <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3"
                                                href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content px-1 pt-1">
                        <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1"
                             class="tab-pane active">
                            <div id="activity" class="col-12 timeline-left">
                                <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                                <div id="timeline" class="timeline-left timeline-wrapper">
                                    <ul class="timeline">
                                        <li class="timeline-line"></li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-purple bg-lighten-1"><i
                                                        class="ft-shopping-cart"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="deep-purple-text medium-small">just
                                                    now</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim
                                                    Doe Purchased new equipments for zonal office.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-info bg-lighten-1"><i
                                                        class="fa fa-plane"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="cyan-text medium-small">Yesterday</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your
                                                    Next flight for USA will be on 15th August 2015.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-success bg-lighten-1"><i
                                                        class="ft-mic"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="green-text medium-small">5
                                                    Days Ago</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                    Natalya Parker Send you a voice mail for next conference.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-warning bg-lighten-1"><i
                                                        class="ft-map-pin"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="amber-text medium-small">1
                                                    Week Ago</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                    Jessy Jay open a new store at S.G Road.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-red bg-lighten-1"><i
                                                        class="ft-inbox"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="deep-orange-text medium-small">2
                                                    Week Ago</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                    voice mail for conference.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-cyan bg-lighten-1"><i
                                                        class="ft-mic"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="brown-text medium-small">1
                                                    Month Ago</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                    Natalya Parker Send you a voice mail for next conference.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-amber bg-lighten-1"><i
                                                        class="ft-map-pin"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="deep-purple-text medium-small">3
                                                    Month Ago</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                    Jessy Jay open a new store at S.G Road.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span data-toggle="tooltip"
                                                                              data-placement="right"
                                                                              title="Portfolio project work"
                                                                              class="bg-grey bg-lighten-1"><i
                                                        class="ft-inbox"></i></span></div>
                                            <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                             class="grey-text medium-small">1
                                                    Year Ago</a>
                                                <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">
                                                    voice mail for conference.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                            <div id="chatapp" class="col-12">
                                <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                                <div class="collection border-none">
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-12.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth
                                                    Elliott </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Thank you </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-6.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary
                                                    Adams </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Hello Boo </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-11.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb
                                                    Richards </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Keny ! </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-18.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June
                                                    Lane </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Ohh God </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-1.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward
                                                    Fletcher </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Love you </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-2.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal
                                                    Bates </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Can we </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-3.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan
                                                    Watts </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Great! </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-15.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard
                                                    Wood </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Do it </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-19.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie
                                                    Ellis </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Got that </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-14.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn
                                                    Wood </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Like you </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-13.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel
                                                    Russell </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Thank you </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-22.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah
                                                    Graves </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Okay you </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-9.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew
                                                    Hoffman </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Can do </p>
                                        </div>
                                    </div>
                                    <div class="media mb-1"><a><img alt="96x96"
                                                                    src="../app-assets/img/portrait/small/avatar-s-20.png"
                                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila
                                                    Lynch </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                                            </div>
                                            <p class="text-muted font-small-3">Leave it </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                            <div id="settings" class="col-12">
                                <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="togglebutton">
                                            <div class="switch"><span class="text-bold-500">Notifications</span>
                                                <div class="float-right">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input id="notifications1" checked="checked" type="checkbox"
                                                               class="custom-control-input cz-bg-image-display">
                                                        <label for="notifications1"
                                                               class="custom-control-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li>
                                        <div class="togglebutton">
                                            <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                                <div class="float-right">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input id="recent-activity1" checked="checked" type="checkbox"
                                                               class="custom-control-input cz-bg-image-display">
                                                        <label for="recent-activity1"
                                                               class="custom-control-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the
                                            input.</p>
                                    </li>
                                    <li>
                                        <div class="togglebutton">
                                            <div class="switch"><span class="text-bold-500">Notifications</span>
                                                <div class="float-right">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input id="notifications2" type="checkbox"
                                                               class="custom-control-input cz-bg-image-display">
                                                        <label for="notifications2"
                                                               class="custom-control-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li>
                                        <div class="togglebutton">
                                            <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                                <div class="float-right">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input id="recent-activity2" type="checkbox"
                                                               class="custom-control-input cz-bg-image-display">
                                                        <label for="recent-activity2"
                                                               class="custom-control-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the
                                            input.</p>
                                    </li>
                                    <li>
                                        <div class="togglebutton">
                                            <div class="switch"><span class="text-bold-500">Show your emails</span>
                                                <div class="float-right">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input id="show-emails" type="checkbox"
                                                               class="custom-control-input cz-bg-image-display">
                                                        <label for="show-emails" class="custom-control-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li>
                                        <div class="togglebutton">
                                            <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                                                <div class="float-right">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input id="show-stats" type="checkbox"
                                                               class="custom-control-input cz-bg-image-display">
                                                        <label for="show-stats" class="custom-control-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the
                                            input.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- END Notification Sidebar-->

    --}}
@endsection



@section('js')
    @parent

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/chartist.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    {{--<script src="{{asset('app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>--}}
    <script src="{{asset('app-assets/js/notification-sidebar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/customizer.js')}}" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/dashboard2.js')}}" type="text/javascript"></script>
@endsection
