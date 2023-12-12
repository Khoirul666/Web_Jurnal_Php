<?php include 'config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <title>ADMIN PAGE</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/notification/notification.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- morris chart -->
    <link rel="stylesheet" type="text/css" href="assets/css/morris.js/css/morris.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.min.css">

    <script type="text/javascript">
        var posisi="index";
    </script>
</head>

<body>
    <?php 
    $posisi_page = isset($_GET['data']) ? $_GET['data'] : '';
    ?>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- NAVBAR -->
            <?php include('app/navbar.php') ?>
            <!-- ENDNAVBAR -->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- SIDEBAR -->
                    <?php include('app/sidebar.php') ?>
                    <!-- ENDSIDEBAR -->

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">

                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <?php

                                        if ($posisi_page=='bencana') {
                                            include('page/data_bencana.php');
                                        }
                                        else if ($posisi_page=='add_bencana') {
                                            include('page/add_bencana.php');
                                        }
                                        else if ($posisi_page=='update_bencana') {
                                            include('page/update_bencana.php');
                                        }
                                        else if ($posisi_page=='read_bencana') {
                                            include('page/read_bencana.php');
                                        }
                                        else if ($posisi_page=='kejadian') {
                                            include('page/data_kejadian.php');
                                        }
                                        else if ($posisi_page=='add_kejadian') {
                                            include('page/add_kejadian.php');
                                        }
                                        else if ($posisi_page=='update_kejadian') {
                                            include('page/update_kejadian.php');
                                        }
                                        else if ($posisi_page=='read_kejadian') {
                                            include('page/read_kejadian.php');
                                        }
                                        else{
                                            include('page/index.php');
                                        }

                                        ?>
                                        <!-- <ul class="notifications">
                                            <li>
                                                <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="left" data-icon="fa fa-check">Top Left</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-comments">Top Right</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</button>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Morris Chart js -->
    <script src="assets/js/raphael/raphael.min.js"></script>
    <script src="assets/js/morris.js/morris.js"></script>
    <!-- Custom js -->
    <script src="assets/pages/chart/morris/morris-custom-chart.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

    <!-- notification js -->
    <script type="text/javascript" src="assets/js/bootstrap-growl.min.js"></script>
    <script type="text/javascript" src="assets/pages/notification/notification.js"></script>
    <script type="text/javascript" src="assets/datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        var a=0;
        var data_bencana=0;
        var data_kejadian=0;
        let table = new DataTable(".dataTable");
        // console.log(table);
        setInterval(
            update_data
            ,5000);
        function update_data() {
            // a++;
            // if (a%7==0) {
            //     console.log(a,posisi);
            // }
            // console.log(posisi,a++);

            $.ajax({
                url:'ajax_request.php',
                method:'GET',
                success:function(data){
                    // console.log(JSON.parse(data));
                    // console.log(JSON.parse(data));
                    var data = JSON.parse(data);
                    if (data.jumlah_bencana_baru>0||data.jumlah_kejadian_baru>0) {
                        var message = "";
                        if (data.jumlah_bencana_baru>0) {
                            message += "ada "+data.jumlah_bencana_baru+" Laporan Bencana";
                        }
                        update(data.bencana_baru);
                        if (data.jumlah_kejadian_baru>0) {
                            if (data.jumlah_bencana_baru>0) {message += " dan ";}
                            message += data.jumlah_kejadian_baru+" Laporan Kejadian";
                        }
                        update(data.kejadian_baru);
                        notify("top","center","fa fa-comments","inverse","","",message);
                    }

                },
                error:function(data){
                    // console.log('error');
                    console.log(data);
                }

            })
        }
        function notify(from, align, icon, type, animIn, animOut,message){
            $.growl({
                icon: '',
                title: 'Pesan Baru, ',
                message: message,
                url: ''
            },{
                element: 'body',
                type: type,
                allow_dismiss: true,
                placement: {
                    from: from,
                    align: align
                },
                offset: {
                    x: 30,
                    y: 30
                },
                spacing: 10,
                z_index: 999999,
                delay: 2500,
                timer: 1000,
                url_target: '_blank',
                mouse_over: false,
                animate: {
                    enter: animIn,
                    exit: animOut
                },
                icon_type: 'class',
                template: '<div data-growl="container" class="alert" role="alert">' +
                '<button type="button" class="close" data-growl="dismiss">' +
                '<span aria-hidden="true">&times;</span>' +
                '<span class="sr-only">Close</span>' +
                '</button>' +
                '<span data-growl="icon"></span>' +
                '<span data-growl="title"></span>' +
                '<span data-growl="message"></span>' +
                '<a href="#" data-growl="url"></a>' +
                '</div>'
            });
        };
        function update(data) {
            // update status
            // let id = data.length>0?data[0].id:0;
            if (data.length>0) {
                data.forEach(function(isi) {
                    console.log(isi.id);
                    $.ajax({
                        url:'update_status.php',
                        method:'GET',
                        data:{
                            id:isi.id,
                        },
                        success:function(data){
                            console.log(data);
                        },
                        error:function(data) {
                            console.log(data);
                        }

                    })
                });
            }
            // '<?php 
            // if ($posisi_page=='kejadian') {
            //     ?>'
            //     // console.log('kejadian');

            //     '<?php
            // } 
            // if ($posisi_page=='bencana') {
            //     ?>'
            //     // console.log('bencana');

            //     '<?php
            // }
            // ?>'
            // console.log('update',data[0].id);
            // data.each(function(isi){
                // console.log('update',isi);
            // });
            // console.log(data.length);
        }
        
    </script>
</body>

</html>
