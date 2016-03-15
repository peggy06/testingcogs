@extends('backend.layout')
@section('content')

   <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3> <?php echo $page; ?></h3>
                        </div>

                        
                    </div>
                    <div class="clearfix"></div>

	<div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" style="height:600px;">
                                <div class="x_title">
                                    <h2>User Account Log | <small> Shows the  record of account activity </small></h2>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                <form action="<?php echo ($type=='user')? "/REdashboard" : "/REdashboardadmin" ?>" method="post">
                                
                                        <div class="form-group">
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="col-md-3 xdisplay_inputx form-group has-feedback">
                                                            <input type="text" name="filter" class="form-control has-feedback-left" id="single_cal1" placeholder="Date" aria-describedby="inputSuccess2Status" value="<?php echo (isset($date))? $date : ""; ?>" readonly>
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-success">Filter</button>
                                            </div>
                                        </div>
                                    </form>       
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Log ID</th>
                                                <th>Account</th>
                                                <th>Activity</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($_useraccount as $userlog): ?>
                                            <tr>
                                                <th scope="row"><?php echo $userlog->log_id; ?></th>
                                                <td><?php echo $userlog->user_email; ?></td>
                                                <td><?php echo $userlog->activity; ?></td>
                                                <td><?php echo $userlog->Date; ?></td>
                                                <td><?php echo $userlog->Time; ?></td>
                                            </tr>
                                         <?php endforeach;?>
                                        </tbody>
                                    </table><br>
                                    
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right"><span class="fa fa-copyright"></span> 2016 All Rights Reserved |
                            <span class="lead"> <i class="fa fa-paint-brush"></i> Chiaroscuro Artworks and Gallery</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

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

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="../../assets4backend/js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="../../assets4backend/js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/gauge/gauge_demo.js"></script>
    <!-- chart js -->
    <script src="../../assets4backend/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../../assets4backend/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../../assets4backend/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../../assets4backend/js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="../../assets4backend/js/moment.min.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/datepicker/daterangepicker.js"></script>

    <script src="../../assets4backend/js/custom.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/date.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/flot/jquery.flot.resize.js"></script>
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
    <script type="text/javascript" src="../../assets4backend/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/maps/gdp-data.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="../../assets4backend/js/maps/jquery-jvectormap-us-aea-en.js"></script>
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
    <script src="js/skycons/skycons.js"></script>
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
     <script type="text/javascript">
        $(document).ready(function () {
            $('#single_cal1').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            
        });
    </script>
    
    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
@stop