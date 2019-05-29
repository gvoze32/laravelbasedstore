<!DOCTYPE html>
<html style="overflow: hidden;" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="file:///D:/Data/Me/Project/Html/Bahan/Bootstrap/NiceAdmin/img/favicon.png">

  <title>Toko Komputer</title>

  <!-- Bootstrap CSS -->
  <link href="home_files/bootstrap.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="home_files/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="home_files/elegant-icons-style.css" rel="stylesheet">
  <link href="home_files/font-awesome.css" rel="stylesheet">
  <!-- full calendar css-->
  <link href="home_files/bootstrap-fullcalendar.css" rel="stylesheet">
  <link href="home_files/fullcalendar_002.css" rel="stylesheet">
  <!-- easy pie chart-->
  <link href="home_files/jquery.css" rel="stylesheet" type="text/css" media="screen">
  <!-- owl carousel -->
  <link rel="stylesheet" href="home_files/owl.css" type="text/css">
  <link href="home_files/jquery-jvectormap-1.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="home_files/fullcalendar.css">
  <link href="home_files/widgets.css" rel="stylesheet">
  <link href="home_files/style.css" rel="stylesheet">
  <link href="home_files/style-responsive.css" rel="stylesheet">
  <link href="home_files/xcharts.css" rel=" stylesheet">
  <link href="home_files/jquery-ui-1.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">toko<span class="lite">komputer</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            @if(\Session::has('otentikasi'))
                  <li><a href class="lite">Halo, {{Session::get('otentikasi')}}</a></li>
                  <li><a href="{{url('keluar')}}"><span class="username">Keluar</span></a></li>
            @else
                  <li><a href="{{url('otentikasi')}}"><span class="username">Masuk</span></a></li>
            @endif
        </ul>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " style="overflow: hidden; outline: currentcolor none medium;" tabindex="5000">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="/">
                          <i class="icon_house_alt"></i>
                          <span>Beranda</span>
                      </a>

            <a class="" href="/produk">
                          <i class="icon_archive"></i>
                          <span>Produk</span>
                      </a>
          </li>
          <li>
            <a class="" href="/karyawan">
                          <i class="icon_group"></i>
                          <span>Karyawan</span>

                      </a>

          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>TOKO KOMPUTER</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Beranda</a></li>
              <li><i class="icon_archive"></i><a href="{{ url('/produk') }}">Produk</a></li>
              <li><i class="icon_group"></i><a href="{{ url('/karyawan') }}">Karyawan</a></li>
            </ol>
          </div>
        </div>
        <br>

        @yield('konten')
      

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->

        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="home_files/jquery.js"></script>
  <script src="home_files/jquery-ui-1.js"></script>
  <script src="home_files/jquery-1.js"></script>
  <script type="text/javascript" src="home_files/jquery-ui-1_002.js"></script>
  <!-- bootstrap -->
  <script src="home_files/bootstrap.js"></script>
  <!-- nice scroll -->
  <script src="home_files/jquery_003.js"></script>
  <script src="home_files/jquery_008.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="home_files/jquery_007.js"></script>
  <script src="home_files/jquery_011.js" type="text/javascript"></script>
  <script src="home_files/jquery_004.js"></script>
  <script src="home_files/owl.js"></script>
  <!-- jQuery full calendar -->
  &lt;<script src="home_files/fullcalendar.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="home_files/fullcalendar_002.js"></script>
    <!--script for this page only-->
    <script src="home_files/calendar-custom.js"></script>
    <script src="home_files/jquery_009.js"></script>
    <!-- custom select -->
    <script src="home_files/jquery_010.js"></script>
    <script src="home_files/Chart.js"></script>

    <!--custome script for all page-->
    <script src="home_files/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="home_files/sparkline-chart.js"></script>
    <script src="home_files/easy-pie-chart.js"></script>
    <script src="home_files/jquery-jvectormap-1.js"></script>
    <script src="home_files/jquery-jvectormap-world-mill-en.js"></script>
    <script src="home_files/xcharts.js"></script>
    <script src="home_files/jquery_002.js"></script>
    <script src="home_files/jquery_006.js"></script>
    <script src="home_files/gdp-data.js"></script>
    <script src="home_files/morris.js"></script>
    <script src="home_files/sparklines.js"></script>
    <script src="home_files/charts.js"></script>
    <script src="home_files/jquery_005.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>




<div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(247, 247, 247) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 150px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(247, 247, 247) none repeat scroll 0% 0%; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2001" class="nicescroll-rails" style="width: 3px; z-index: auto; background: rgb(247, 247, 247) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; left: 177px; height: 632px; display: none;"><div style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails" style="height: 3px; z-index: auto; background: rgb(247, 247, 247) none repeat scroll 0% 0%; top: 629px; left: 0px; position: fixed; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;"></div></div><div class="jvectormap-label" style="display: none;">Greenland</div></body></html>