<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Task Management | Dashboard</title>


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


<!-- jQuery -->
<script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <script src="{{asset("assets/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>

    <!-- Bootstrap -->
<script src="{{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/dist/js/adminlte.js")}}"></script>

<!-- PAGE PLUGINS -->

<!-- ChartJS -->
<script src="{{asset("assets/plugins/chart.js/Chart.min.js")}}"></script>
<!-- SELECT2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- Daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<link rel="stylesheet" href="{{asset("assets/plugins/daterangepicker/daterangepicker.css")}}">
<script src="{{asset("assets/plugins/daterangepicker/daterangepicker.js")}}"></script>

{{-- Sweet Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

{{-- Vue JS --}}
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

{{-- LOADING SPINNER --}}
<style>
    #overlay{
	position: fixed;
	top: 0;
	z-index: 100;
	width: 100%;
	height:100%;
	display: none;
	background: rgba(0,0,0,0.6);
}
.cv-spinner {
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.spinner {
	width: 40px;
	height: 40px;
	border: 4px #ddd solid;
	border-top: 4px #2e93e6 solid;
	border-radius: 50%;
	animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
	100% {
		transform: rotate(360deg);
	}
}
.is-hide{
	display:none;
}
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
<script>
    $("#overlay").fadeIn(300);
</script>

<div class="wrapper">
  @include('components.navbar')
  @include('components.sidebar')

  <!-- Content Wrapper. Contains page content -->

        @yield('content')

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://vrizki.com">VRIZKI TECHNOLOGY</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // LOADING SPINNER
    $(document).ready(function(){
        $("#overlay").hide();
    });

    $(document). ajaxStart( function() {
        $("#overlay").fadeIn(300);
    });
    $(document). ajaxComplete( function() {
        $("#overlay").hide();
    });
</script>



</body>
</html>
