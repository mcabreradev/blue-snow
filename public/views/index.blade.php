<!DOCTYPE html>
<html>
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
<body class="" ng-app="myApp" ng-controller="mainController">

@include('partials/header')

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container row-fluid">
  
  @include('partials/sidebar/sidebar')

  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">

    @include('partials/portlet')

    <div class="clearfix"></div>

    <!-- ANGULAR-VIEW-CONTAINER -->
    <div class="content animated  fadeIn" id="angular-view-container" ng-view=""> 
     
    </div>
    <!-- END  ANGULAR-VIEW-CONTAINER -->
    
  </div>

 </div>
<!-- END PAGE CONTAINER -->

@include('libs/angular')
@include('libs/js')
</body>
</html>