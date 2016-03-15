<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?php echo "http://".$_SERVER["SERVER_NAME"];?>">
    <title>Chiaroscuro | <?php echo $page; ?></title>

    <!-- Bootstrap core CSS -->

    <link href="assets/backend/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/backend/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/backend/css/animate.min.css" rel="stylesheet">
    <link href="assets/backend/css/backend_style.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="assets/backend/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/backend/css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="assets/backend/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="assets/backend/css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="assets/backend/js/jquery.min.js"></script>
    <script src="assets/backend/js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<?php if($modify=="login"): ?>

<body style="background:#F7F7F7;">
	@yield('content')
</body>

<?php elseif($modify=="otherpage"): ?>
<body class="nav-md">

    <div class="container body">
    
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/dashboard" class="site_title"><i class="fa fa-paint-brush"></i> <span>Chiaroscuro</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo ucwords($_SESSION["session_testing"]); ?></h2>
                        </div>
                        
                        <div class="profile_pic">
                        	&nbsp;
                        </div><br />
<br />
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                     <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>&nbsp;</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bar-chart-o"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                                	
                                	<ul class="nav child_menu" style="display: none">
                                        <li><a href="/dashboard">Users Activity</a>
                                        </li>
                                        <li><a href="/Admindashboard">Admin Activity</a>
                                        </li>
                                        <li><a href="/order">Order List</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="/gallerypainting"><i class="fa fa-tags"></i> Shop Product	 </a>
                                    
                                </li>
                                <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="/usersdata">Admin</a>
                                        </li>
                                        <li><a href="/usersstaff">Staff</a>
                                        </li>
                                        <li><a href="/customer">Customers</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gears"></i> System Settings <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="/setIndexpage">Index Page Settings</a>
                                        </li>
                                        <li><a href="/setHistory">History Settings</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer">
                        <a  >
                            <span class="" aria-hidden="true">&nbsp;</span>
                        </a>
                        <a  >
                            <span class="" aria-hidden="true">&nbsp;</span>
                        </a>
                        <a  >
                            <span class="" aria-hidden="true">&nbsp;</span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
              				@yield('content')
           	<!-- /page content>
                
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="assets/backend/js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="assets/backend/js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="assets/backend/js/gauge/gauge_demo.js"></script>
    <!-- chart js -->
    <script src="assets/backend/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="assets/backend/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/backend/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="assets/backend/js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="assets/backend/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/backend/js/datepicker/daterangepicker.js"></script>

    <script src="assets/backend/js/custom.js"></script>
    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/date.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="assets/backend/js/flot/jquery.flot.resize.js"></script>
    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

    <!-- worldmap -->
    <script type="text/javascript" src="assets/backend/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
    <script type="text/javascript" src="assets/backend/js/maps/gdp-data.js"></script>
    <script type="text/javascript" src="assets/backend/js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="assets/backend/js/maps/jquery-jvectormap-us-aea-en.js"></script>
    <script>
        $(function () {
            $('#world-map-gdp').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                zoomOnScroll: false,
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#E6F2F0', '#149B7E'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    <!-- skycons -->
    <script src="assets/backend/js/skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
    ];
        var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
</body>
<?php endif; ?>
</html>
