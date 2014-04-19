<!DOCTYPE html>
<html ng-app>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title> Blue Snow </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
@include('libs/css')
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">

@include('partials/header')

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container row-fluid">
  
	@include('partials/sidebar')

  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">

    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content"> 
    	<!-- LOAD CONTENT --> 
 		@yield('content')
 		<!-- LOAD CONTENT --> 		
    </div>
  </div>

 </div>
<!-- END PAGE CONTAINER -->

@include('partials/chat') 
@include('libs/angular')
@include('libs/js')
</body>
</html>