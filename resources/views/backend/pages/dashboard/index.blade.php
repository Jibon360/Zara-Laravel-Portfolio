@extends('backend.layouts.master')
@section('title', 'zarin admin dashboard')
@section('dashboard', 'active')
@section('content')
    <div class="row">
        @php
        
        $about = App\Models\About::count();
        $blog = App\Models\Blog::count();
        $services = App\Models\service::count();
        $user = App\Models\User::count();
        
    @endphp
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }}! 🎉</h5>
                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                your profile.
                            </p>

                            <a href="{{ route('profile.index') }}" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                    {{-- <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('backend') }}/assets/img/icons/unicons/chart-success.png"
                                        alt="chart success" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="{{ route('service.index') }}">View More</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Services</span>
                            @php
                                $services = App\Models\service::count();
                            @endphp
                            <h3 class="card-title mb-2">{{ $services }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                {{ $services }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('backend') }}/assets/img/icons/unicons/wallet-info.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                                @php
                                    $portfolio = App\Models\Portfolio::count();
                                @endphp
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="{{ route('portfolio.index') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            <span>Portfolio</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $portfolio }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                {{ $portfolio }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue Of Website</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartsuk9kgi04" class="apexcharts-canvas apexchartsuk9kgi04 apexcharts-theme-light"
                                style="width: 439px; height: 300px;"><svg id="SvgjsSvg1288" width="439" height="300"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="439" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="2021" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2"
                                                    data:collapsed="false"
                                                    style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="2020" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1290" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(54.55908203125, 51)">
                                        <defs id="SvgjsDefs1289">
                                            <linearGradient id="SvgjsLinearGradient1294" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1295" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1296" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1297" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskuk9kgi04">
                                                <rect id="SvgjsRect1299" width="374.44091796875" height="223.73"
                                                    x="-5" y="-3" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskuk9kgi04"></clipPath>
                                            <clipPath id="nonForecastMaskuk9kgi04"></clipPath>
                                            <clipPath id="gridRectMarkerMaskuk9kgi04">
                                                <rect id="SvgjsRect1300" width="368.44091796875" height="221.73"
                                                    x="-2" y="-2" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1298" width="21.866455078125" height="217.73"
                                            x="164.93701171875" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke-dasharray="3"
                                            fill="url(#SvgjsLinearGradient1294)" class="apexcharts-xcrosshairs"
                                            y2="217.73" filter="none" fill-opacity="0.9" x1="164.93701171875"
                                            x2="164.93701171875"></rect>
                                        <g id="SvgjsG1320" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1321" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1323"
                                                    font-family="Helvetica, Arial, sans-serif" x="26.031494140625"
                                                    y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1324">Logo</tspan>
                                                    <title>Logo</title>
                                                </text><text id="SvgjsText1326" font-family="Helvetica, Arial, sans-serif"
                                                    x="78.094482421875" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1327">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1329" font-family="Helvetica, Arial, sans-serif"
                                                    x="130.157470703125" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1330">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1332" font-family="Helvetica, Arial, sans-serif"
                                                    x="182.220458984375" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1333">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1335" font-family="Helvetica, Arial, sans-serif"
                                                    x="234.283447265625" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1336">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1338" font-family="Helvetica, Arial, sans-serif"
                                                    x="286.346435546875" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1339">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1341" font-family="Helvetica, Arial, sans-serif"
                                                    x="338.409423828125" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1342">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1357" class="apexcharts-grid">
                                            <g id="SvgjsG1358" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1360" x1="0" y1="0"
                                                    x2="364.44091796875" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1361" x1="0" y1="43.546"
                                                    x2="364.44091796875" y2="43.546" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1362" x1="0" y1="87.092"
                                                    x2="364.44091796875" y2="87.092" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1363" x1="0" y1="130.638"
                                                    x2="364.44091796875" y2="130.638" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1364" x1="0" y1="174.184"
                                                    x2="364.44091796875" y2="174.184" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1365" x1="0" y1="217.73"
                                                    x2="364.44091796875" y2="217.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1359" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1367" x1="0" y1="217.73" x2="364.44091796875"
                                                y2="217.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1366" x1="0" y1="1" x2="0"
                                                y2="217.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1301" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1302" class="apexcharts-series" seriesName="2021"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1304"
                                                    d="M 15.0982666015625 120.638L 15.0982666015625 62.255200000000016Q 15.0982666015625 52.255200000000016 25.0982666015625 52.255200000000016L 20.9647216796875 52.255200000000016Q 30.9647216796875 52.255200000000016 30.9647216796875 62.255200000000016L 30.9647216796875 62.255200000000016L 30.9647216796875 120.638Q 30.9647216796875 130.638 20.9647216796875 130.638L 25.0982666015625 130.638Q 15.0982666015625 130.638 15.0982666015625 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 15.0982666015625 120.638L 15.0982666015625 62.255200000000016Q 15.0982666015625 52.255200000000016 25.0982666015625 52.255200000000016L 20.9647216796875 52.255200000000016Q 30.9647216796875 52.255200000000016 30.9647216796875 62.255200000000016L 30.9647216796875 62.255200000000016L 30.9647216796875 120.638Q 30.9647216796875 130.638 20.9647216796875 130.638L 25.0982666015625 130.638Q 15.0982666015625 130.638 15.0982666015625 120.638z"
                                                    pathFrom="M 15.0982666015625 120.638L 15.0982666015625 120.638L 30.9647216796875 120.638L 30.9647216796875 120.638L 30.9647216796875 120.638L 30.9647216796875 120.638L 30.9647216796875 120.638L 15.0982666015625 120.638"
                                                    cy="52.255200000000016" cx="64.1612548828125" j="0"
                                                    val="18" barHeight="78.38279999999999"
                                                    barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1305"
                                                    d="M 67.1612548828125 120.638L 67.1612548828125 110.15580000000001Q 67.1612548828125 100.15580000000001 77.1612548828125 100.15580000000001L 73.0277099609375 100.15580000000001Q 83.0277099609375 100.15580000000001 83.0277099609375 110.15580000000001L 83.0277099609375 110.15580000000001L 83.0277099609375 120.638Q 83.0277099609375 130.638 73.0277099609375 130.638L 77.1612548828125 130.638Q 67.1612548828125 130.638 67.1612548828125 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 67.1612548828125 120.638L 67.1612548828125 110.15580000000001Q 67.1612548828125 100.15580000000001 77.1612548828125 100.15580000000001L 73.0277099609375 100.15580000000001Q 83.0277099609375 100.15580000000001 83.0277099609375 110.15580000000001L 83.0277099609375 110.15580000000001L 83.0277099609375 120.638Q 83.0277099609375 130.638 73.0277099609375 130.638L 77.1612548828125 130.638Q 67.1612548828125 130.638 67.1612548828125 120.638z"
                                                    pathFrom="M 67.1612548828125 120.638L 67.1612548828125 120.638L 83.0277099609375 120.638L 83.0277099609375 120.638L 83.0277099609375 120.638L 83.0277099609375 120.638L 83.0277099609375 120.638L 67.1612548828125 120.638"
                                                    cy="100.15580000000001" cx="116.2242431640625" j="1"
                                                    val="7" barHeight="30.482199999999995"
                                                    barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1306"
                                                    d="M 119.2242431640625 120.638L 119.2242431640625 75.31900000000002Q 119.2242431640625 65.31900000000002 129.2242431640625 65.31900000000002L 125.0906982421875 65.31900000000002Q 135.0906982421875 65.31900000000002 135.0906982421875 75.31900000000002L 135.0906982421875 75.31900000000002L 135.0906982421875 120.638Q 135.0906982421875 130.638 125.0906982421875 130.638L 129.2242431640625 130.638Q 119.2242431640625 130.638 119.2242431640625 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 119.2242431640625 120.638L 119.2242431640625 75.31900000000002Q 119.2242431640625 65.31900000000002 129.2242431640625 65.31900000000002L 125.0906982421875 65.31900000000002Q 135.0906982421875 65.31900000000002 135.0906982421875 75.31900000000002L 135.0906982421875 75.31900000000002L 135.0906982421875 120.638Q 135.0906982421875 130.638 125.0906982421875 130.638L 129.2242431640625 130.638Q 119.2242431640625 130.638 119.2242431640625 120.638z"
                                                    pathFrom="M 119.2242431640625 120.638L 119.2242431640625 120.638L 135.0906982421875 120.638L 135.0906982421875 120.638L 135.0906982421875 120.638L 135.0906982421875 120.638L 135.0906982421875 120.638L 119.2242431640625 120.638"
                                                    cy="65.31900000000002" cx="168.2872314453125" j="2"
                                                    val="15" barHeight="65.31899999999999"
                                                    barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1307"
                                                    d="M 171.2872314453125 120.638L 171.2872314453125 14.35460000000002Q 171.2872314453125 4.354600000000019 181.2872314453125 4.354600000000019L 177.1536865234375 4.354600000000019Q 187.1536865234375 4.354600000000019 187.1536865234375 14.35460000000002L 187.1536865234375 14.35460000000002L 187.1536865234375 120.638Q 187.1536865234375 130.638 177.1536865234375 130.638L 181.2872314453125 130.638Q 171.2872314453125 130.638 171.2872314453125 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 171.2872314453125 120.638L 171.2872314453125 14.35460000000002Q 171.2872314453125 4.354600000000019 181.2872314453125 4.354600000000019L 177.1536865234375 4.354600000000019Q 187.1536865234375 4.354600000000019 187.1536865234375 14.35460000000002L 187.1536865234375 14.35460000000002L 187.1536865234375 120.638Q 187.1536865234375 130.638 177.1536865234375 130.638L 181.2872314453125 130.638Q 171.2872314453125 130.638 171.2872314453125 120.638z"
                                                    pathFrom="M 171.2872314453125 120.638L 171.2872314453125 120.638L 187.1536865234375 120.638L 187.1536865234375 120.638L 187.1536865234375 120.638L 187.1536865234375 120.638L 187.1536865234375 120.638L 171.2872314453125 120.638"
                                                    cy="4.354600000000019" cx="220.3502197265625" j="3"
                                                    val="29" barHeight="126.28339999999999"
                                                    barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1308"
                                                    d="M 223.3502197265625 120.638L 223.3502197265625 62.255200000000016Q 223.3502197265625 52.255200000000016 233.3502197265625 52.255200000000016L 229.2166748046875 52.255200000000016Q 239.2166748046875 52.255200000000016 239.2166748046875 62.255200000000016L 239.2166748046875 62.255200000000016L 239.2166748046875 120.638Q 239.2166748046875 130.638 229.2166748046875 130.638L 233.3502197265625 130.638Q 223.3502197265625 130.638 223.3502197265625 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 223.3502197265625 120.638L 223.3502197265625 62.255200000000016Q 223.3502197265625 52.255200000000016 233.3502197265625 52.255200000000016L 229.2166748046875 52.255200000000016Q 239.2166748046875 52.255200000000016 239.2166748046875 62.255200000000016L 239.2166748046875 62.255200000000016L 239.2166748046875 120.638Q 239.2166748046875 130.638 229.2166748046875 130.638L 233.3502197265625 130.638Q 223.3502197265625 130.638 223.3502197265625 120.638z"
                                                    pathFrom="M 223.3502197265625 120.638L 223.3502197265625 120.638L 239.2166748046875 120.638L 239.2166748046875 120.638L 239.2166748046875 120.638L 239.2166748046875 120.638L 239.2166748046875 120.638L 223.3502197265625 120.638"
                                                    cy="52.255200000000016" cx="272.4132080078125" j="4"
                                                    val="18" barHeight="78.38279999999999"
                                                    barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1309"
                                                    d="M 275.4132080078125 120.638L 275.4132080078125 88.3828Q 275.4132080078125 78.3828 285.4132080078125 78.3828L 281.2796630859375 78.3828Q 291.2796630859375 78.3828 291.2796630859375 88.3828L 291.2796630859375 88.3828L 291.2796630859375 120.638Q 291.2796630859375 130.638 281.2796630859375 130.638L 285.4132080078125 130.638Q 275.4132080078125 130.638 275.4132080078125 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 275.4132080078125 120.638L 275.4132080078125 88.3828Q 275.4132080078125 78.3828 285.4132080078125 78.3828L 281.2796630859375 78.3828Q 291.2796630859375 78.3828 291.2796630859375 88.3828L 291.2796630859375 88.3828L 291.2796630859375 120.638Q 291.2796630859375 130.638 281.2796630859375 130.638L 285.4132080078125 130.638Q 275.4132080078125 130.638 275.4132080078125 120.638z"
                                                    pathFrom="M 275.4132080078125 120.638L 275.4132080078125 120.638L 291.2796630859375 120.638L 291.2796630859375 120.638L 291.2796630859375 120.638L 291.2796630859375 120.638L 291.2796630859375 120.638L 275.4132080078125 120.638"
                                                    cy="78.3828" cx="324.4761962890625" j="5" val="12"
                                                    barHeight="52.255199999999995" barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1310"
                                                    d="M 327.4761962890625 120.638L 327.4761962890625 101.44660000000002Q 327.4761962890625 91.44660000000002 337.4761962890625 91.44660000000002L 333.3426513671875 91.44660000000002Q 343.3426513671875 91.44660000000002 343.3426513671875 101.44660000000002L 343.3426513671875 101.44660000000002L 343.3426513671875 120.638Q 343.3426513671875 130.638 333.3426513671875 130.638L 337.4761962890625 130.638Q 327.4761962890625 130.638 327.4761962890625 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 327.4761962890625 120.638L 327.4761962890625 101.44660000000002Q 327.4761962890625 91.44660000000002 337.4761962890625 91.44660000000002L 333.3426513671875 91.44660000000002Q 343.3426513671875 91.44660000000002 343.3426513671875 101.44660000000002L 343.3426513671875 101.44660000000002L 343.3426513671875 120.638Q 343.3426513671875 130.638 333.3426513671875 130.638L 337.4761962890625 130.638Q 327.4761962890625 130.638 327.4761962890625 120.638z"
                                                    pathFrom="M 327.4761962890625 120.638L 327.4761962890625 120.638L 343.3426513671875 120.638L 343.3426513671875 120.638L 343.3426513671875 120.638L 343.3426513671875 120.638L 343.3426513671875 120.638L 327.4761962890625 120.638"
                                                    cy="91.44660000000002" cx="376.5391845703125" j="6"
                                                    val="9" barHeight="39.191399999999994"
                                                    barWidth="21.866455078125"></path>
                                            </g>
                                            <g id="SvgjsG1311" class="apexcharts-series" seriesName="2020"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1313"
                                                    d="M 15.0982666015625 150.638L 15.0982666015625 187.24779999999998Q 15.0982666015625 197.24779999999998 25.0982666015625 197.24779999999998L 20.9647216796875 197.24779999999998Q 30.9647216796875 197.24779999999998 30.9647216796875 187.24779999999998L 30.9647216796875 187.24779999999998L 30.9647216796875 150.638Q 30.9647216796875 140.638 20.9647216796875 140.638L 25.0982666015625 140.638Q 15.0982666015625 140.638 15.0982666015625 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 15.0982666015625 150.638L 15.0982666015625 187.24779999999998Q 15.0982666015625 197.24779999999998 25.0982666015625 197.24779999999998L 20.9647216796875 197.24779999999998Q 30.9647216796875 197.24779999999998 30.9647216796875 187.24779999999998L 30.9647216796875 187.24779999999998L 30.9647216796875 150.638Q 30.9647216796875 140.638 20.9647216796875 140.638L 25.0982666015625 140.638Q 15.0982666015625 140.638 15.0982666015625 150.638z"
                                                    pathFrom="M 15.0982666015625 150.638L 15.0982666015625 150.638L 30.9647216796875 150.638L 30.9647216796875 150.638L 30.9647216796875 150.638L 30.9647216796875 150.638L 30.9647216796875 150.638L 15.0982666015625 150.638"
                                                    cy="177.24779999999998" cx="64.1612548828125" j="0"
                                                    val="-13" barHeight="-56.60979999999999"
                                                    barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1314"
                                                    d="M 67.1612548828125 150.638L 67.1612548828125 209.0208Q 67.1612548828125 219.0208 77.1612548828125 219.0208L 73.0277099609375 219.0208Q 83.0277099609375 219.0208 83.0277099609375 209.0208L 83.0277099609375 209.0208L 83.0277099609375 150.638Q 83.0277099609375 140.638 73.0277099609375 140.638L 77.1612548828125 140.638Q 67.1612548828125 140.638 67.1612548828125 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 67.1612548828125 150.638L 67.1612548828125 209.0208Q 67.1612548828125 219.0208 77.1612548828125 219.0208L 73.0277099609375 219.0208Q 83.0277099609375 219.0208 83.0277099609375 209.0208L 83.0277099609375 209.0208L 83.0277099609375 150.638Q 83.0277099609375 140.638 73.0277099609375 140.638L 77.1612548828125 140.638Q 67.1612548828125 140.638 67.1612548828125 150.638z"
                                                    pathFrom="M 67.1612548828125 150.638L 67.1612548828125 150.638L 83.0277099609375 150.638L 83.0277099609375 150.638L 83.0277099609375 150.638L 83.0277099609375 150.638L 83.0277099609375 150.638L 67.1612548828125 150.638"
                                                    cy="199.0208" cx="116.2242431640625" j="1" val="-18"
                                                    barHeight="-78.38279999999999" barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1315"
                                                    d="M 119.2242431640625 150.638L 119.2242431640625 169.8294Q 119.2242431640625 179.8294 129.2242431640625 179.8294L 125.0906982421875 179.8294Q 135.0906982421875 179.8294 135.0906982421875 169.8294L 135.0906982421875 169.8294L 135.0906982421875 150.638Q 135.0906982421875 140.638 125.0906982421875 140.638L 129.2242431640625 140.638Q 119.2242431640625 140.638 119.2242431640625 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 119.2242431640625 150.638L 119.2242431640625 169.8294Q 119.2242431640625 179.8294 129.2242431640625 179.8294L 125.0906982421875 179.8294Q 135.0906982421875 179.8294 135.0906982421875 169.8294L 135.0906982421875 169.8294L 135.0906982421875 150.638Q 135.0906982421875 140.638 125.0906982421875 140.638L 129.2242431640625 140.638Q 119.2242431640625 140.638 119.2242431640625 150.638z"
                                                    pathFrom="M 119.2242431640625 150.638L 119.2242431640625 150.638L 135.0906982421875 150.638L 135.0906982421875 150.638L 135.0906982421875 150.638L 135.0906982421875 150.638L 135.0906982421875 150.638L 119.2242431640625 150.638"
                                                    cy="159.8294" cx="168.2872314453125" j="2" val="-9"
                                                    barHeight="-39.191399999999994" barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1316"
                                                    d="M 171.2872314453125 150.638L 171.2872314453125 191.6024Q 171.2872314453125 201.6024 181.2872314453125 201.6024L 177.1536865234375 201.6024Q 187.1536865234375 201.6024 187.1536865234375 191.6024L 187.1536865234375 191.6024L 187.1536865234375 150.638Q 187.1536865234375 140.638 177.1536865234375 140.638L 181.2872314453125 140.638Q 171.2872314453125 140.638 171.2872314453125 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 171.2872314453125 150.638L 171.2872314453125 191.6024Q 171.2872314453125 201.6024 181.2872314453125 201.6024L 177.1536865234375 201.6024Q 187.1536865234375 201.6024 187.1536865234375 191.6024L 187.1536865234375 191.6024L 187.1536865234375 150.638Q 187.1536865234375 140.638 177.1536865234375 140.638L 181.2872314453125 140.638Q 171.2872314453125 140.638 171.2872314453125 150.638z"
                                                    pathFrom="M 171.2872314453125 150.638L 171.2872314453125 150.638L 187.1536865234375 150.638L 187.1536865234375 150.638L 187.1536865234375 150.638L 187.1536865234375 150.638L 187.1536865234375 150.638L 171.2872314453125 150.638"
                                                    cy="181.6024" cx="220.3502197265625" j="3" val="-14"
                                                    barHeight="-60.96439999999999" barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1317"
                                                    d="M 223.3502197265625 150.638L 223.3502197265625 152.411Q 223.3502197265625 162.411 233.3502197265625 162.411L 229.2166748046875 162.411Q 239.2166748046875 162.411 239.2166748046875 152.411L 239.2166748046875 152.411L 239.2166748046875 150.638Q 239.2166748046875 140.638 229.2166748046875 140.638L 233.3502197265625 140.638Q 223.3502197265625 140.638 223.3502197265625 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 223.3502197265625 150.638L 223.3502197265625 152.411Q 223.3502197265625 162.411 233.3502197265625 162.411L 229.2166748046875 162.411Q 239.2166748046875 162.411 239.2166748046875 152.411L 239.2166748046875 152.411L 239.2166748046875 150.638Q 239.2166748046875 140.638 229.2166748046875 140.638L 233.3502197265625 140.638Q 223.3502197265625 140.638 223.3502197265625 150.638z"
                                                    pathFrom="M 223.3502197265625 150.638L 223.3502197265625 150.638L 239.2166748046875 150.638L 239.2166748046875 150.638L 239.2166748046875 150.638L 239.2166748046875 150.638L 239.2166748046875 150.638L 223.3502197265625 150.638"
                                                    cy="142.411" cx="272.4132080078125" j="4" val="-5"
                                                    barHeight="-21.772999999999996" barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1318"
                                                    d="M 275.4132080078125 150.638L 275.4132080078125 204.6662Q 275.4132080078125 214.6662 285.4132080078125 214.6662L 281.2796630859375 214.6662Q 291.2796630859375 214.6662 291.2796630859375 204.6662L 291.2796630859375 204.6662L 291.2796630859375 150.638Q 291.2796630859375 140.638 281.2796630859375 140.638L 285.4132080078125 140.638Q 275.4132080078125 140.638 275.4132080078125 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 275.4132080078125 150.638L 275.4132080078125 204.6662Q 275.4132080078125 214.6662 285.4132080078125 214.6662L 281.2796630859375 214.6662Q 291.2796630859375 214.6662 291.2796630859375 204.6662L 291.2796630859375 204.6662L 291.2796630859375 150.638Q 291.2796630859375 140.638 281.2796630859375 140.638L 285.4132080078125 140.638Q 275.4132080078125 140.638 275.4132080078125 150.638z"
                                                    pathFrom="M 275.4132080078125 150.638L 275.4132080078125 150.638L 291.2796630859375 150.638L 291.2796630859375 150.638L 291.2796630859375 150.638L 291.2796630859375 150.638L 291.2796630859375 150.638L 275.4132080078125 150.638"
                                                    cy="194.6662" cx="324.4761962890625" j="5" val="-17"
                                                    barHeight="-74.0282" barWidth="21.866455078125"></path>
                                                <path id="SvgjsPath1319"
                                                    d="M 327.4761962890625 150.638L 327.4761962890625 195.957Q 327.4761962890625 205.957 337.4761962890625 205.957L 333.3426513671875 205.957Q 343.3426513671875 205.957 343.3426513671875 195.957L 343.3426513671875 195.957L 343.3426513671875 150.638Q 343.3426513671875 140.638 333.3426513671875 140.638L 337.4761962890625 140.638Q 327.4761962890625 140.638 327.4761962890625 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskuk9kgi04)"
                                                    pathTo="M 327.4761962890625 150.638L 327.4761962890625 195.957Q 327.4761962890625 205.957 337.4761962890625 205.957L 333.3426513671875 205.957Q 343.3426513671875 205.957 343.3426513671875 195.957L 343.3426513671875 195.957L 343.3426513671875 150.638Q 343.3426513671875 140.638 333.3426513671875 140.638L 337.4761962890625 140.638Q 327.4761962890625 140.638 327.4761962890625 150.638z"
                                                    pathFrom="M 327.4761962890625 150.638L 327.4761962890625 150.638L 343.3426513671875 150.638L 343.3426513671875 150.638L 343.3426513671875 150.638L 343.3426513671875 150.638L 343.3426513671875 150.638L 327.4761962890625 150.638"
                                                    cy="185.957" cx="376.5391845703125" j="6" val="-15"
                                                    barHeight="-65.31899999999999" barWidth="21.866455078125"></path>
                                            </g>
                                            <g id="SvgjsG1303" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1312" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1368" x1="0" y1="0" x2="364.44091796875"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1369" x1="0" y1="0" x2="364.44091796875"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1370" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1371" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1372" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1343" class="apexcharts-yaxis" rel="0"
                                        transform="translate(16.55908203125, 0)">
                                        <g id="SvgjsG1344" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1345"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="52.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1346">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText1347" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="96.04599999999999" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1348">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1349" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="139.59199999999998" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1350">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText1351" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="183.13799999999998" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1352">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText1353" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="226.68399999999997" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1354">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText1355" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="270.22999999999996" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1356">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1291" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 230.429px; top: 198.011px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Apr</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(3, 195, 236, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">2020: </span><span
                                                    class="apexcharts-tooltip-text-y-value">-14</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(3, 195, 236, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">2020: </span><span
                                                    class="apexcharts-tooltip-text-y-value">-14</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 456px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexchartssfzyilxq"
                                class="apexcharts-canvas apexchartssfzyilxq apexcharts-theme-light"
                                style="width: 228px; height: 154.875px;"><svg id="SvgjsSvg1373" width="228"
                                    height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1375" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(7, -25)">
                                        <defs id="SvgjsDefs1374">
                                            <clipPath id="gridRectMasksfzyilxq">
                                                <rect id="SvgjsRect1377" width="222" height="285" x="-3"
                                                    y="-1" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMasksfzyilxq"></clipPath>
                                            <clipPath id="nonForecastMasksfzyilxq"></clipPath>
                                            <clipPath id="gridRectMarkerMasksfzyilxq">
                                                <rect id="SvgjsRect1378" width="220" height="287" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1383" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1384" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1385" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1386" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1394" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1395" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1396" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1397" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1379" class="apexcharts-radialbar">
                                            <g id="SvgjsG1380">
                                                <g id="SvgjsG1381" class="apexcharts-tracks">
                                                    <g id="SvgjsG1382" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1388">
                                                    <g id="SvgjsG1393" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1398"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient1394)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="5"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="234" data:value="78" index="0"
                                                            j="0"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle1389" r="54.65121951219512" cx="108"
                                                        cy="108" class="apexcharts-radialbar-hollow"
                                                        fill="transparent"></circle>
                                                    <g id="SvgjsG1390" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText1391" font-family="Public Sans" x="108"
                                                            y="123" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: &quot;Public Sans&quot;;">Blog</text><text
                                                            id="SvgjsText1392" font-family="Public Sans" x="108"
                                                            y="99" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="22px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">{{ $blog }}%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1399" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1400" x1="0" y1="0" x2="216"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1376" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 229px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('backend') }}/assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="{{ route('resume.index') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            @php
                            $resume = App\Models\Resume::count();
                        @endphp
                            <span class="d-block mb-1">Resume</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $resume }}</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{ $resume }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('backend') }}/assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="{{ route('blog.index') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            @php
                            $logos = App\Models\Logo::count();
                        @endphp
                            <span class="fw-semibold d-block mb-1">Blog Post</span>
                            <h3 class="card-title mb-2">{{ $blog }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> {{ $blog }}</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
        <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Total Users</h5>
                                        <span class="badge bg-label-warning rounded-pill">Now {{ now()->year }}</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i
                                                class="bx bx-chevron-up"></i> {{ $user }}</small>
                                        <h3 class="mb-0">{{ $user }}</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexcharts252emmo6"
                                        class="apexcharts-canvas apexcharts252emmo6 apexcharts-theme-light"
                                        style="width: 143px; height: 80px;"><svg id="SvgjsSvg1402" width="143"
                                            height="{{ $blog }}" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1404" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1403">
                                                    <clipPath id="gridRectMask252emmo6">
                                                        <rect id="SvgjsRect1409" width="144" height="85"
                                                            x="-4.5" y="-2.5" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask252emmo6"></clipPath>
                                                    <clipPath id="nonForecastMask252emmo6"></clipPath>
                                                    <clipPath id="gridRectMarkerMask252emmo6">
                                                        <rect id="SvgjsRect1410" width="139" height="84"
                                                            x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1416" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1417" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood1417Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1418" in="SvgjsFeFlood1417Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite1418Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1419" dx="5" dy="10"
                                                            result="SvgjsFeOffset1419Out" in="SvgjsFeComposite1418Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1420" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur1420Out"
                                                            in="SvgjsFeOffset1419Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1421" result="SvgjsFeMerge1421Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1422"
                                                                in="SvgjsFeGaussianBlur1420Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1423"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1424" in="SourceGraphic"
                                                            in2="SvgjsFeMerge1421Out" mode="normal"
                                                            result="SvgjsFeBlend1424Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1408" x1="0" y1="0"
                                                    x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="80" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1425" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1426" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1434" class="apexcharts-grid">
                                                    <g id="SvgjsG1435" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1437" x1="0" y1="0"
                                                            x2="135" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1438" x1="0" y1="20"
                                                            x2="135" y2="20" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1439" x1="0" y1="40"
                                                            x2="135" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1440" x1="0" y1="60"
                                                            x2="135" y2="60" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1441" x1="0" y1="80"
                                                            x2="135" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1436" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1443" x1="0" y1="80"
                                                        x2="135" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1442" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1411"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1412" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1415"
                                                            d="M 0 76C 9.45 76 17.55 12 27 12C 36.45 12 44.55 62 54 62C 63.45 62 71.55 22 81 22C 90.45 22 98.55 38 108 38C 117.45 38 125.55 6 135 6"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line"
                                                            index="0" clip-path="url(#gridRectMask252emmo6)"
                                                            filter="url(#SvgjsFilter1416)"
                                                            pathTo="M 0 76C 9.45 76 17.55 12 27 12C 36.45 12 44.55 62 54 62C 63.45 62 71.55 22 81 22C 90.45 22 98.55 38 108 38C 117.45 38 125.55 6 135 6"
                                                            pathFrom="M -1 120L -1 120L 27 120L 54 120L 81 120L 108 120L 135 120">
                                                        </path>
                                                        <g id="SvgjsG1413" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1449" r="0"
                                                                    cx="0" cy="0"
                                                                    class="apexcharts-marker wrin2fn89 no-pointer-events"
                                                                    stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1414" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1444" x1="0" y1="0"
                                                    x2="135" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1445" x1="0" y1="0"
                                                    x2="135" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1446" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1447" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1448" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1407" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG1433" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1405" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 281px; height: 117px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
