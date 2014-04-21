<!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  
   <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
   
   <!-- BEGIN MINI-PROFILE -->
   @include('partials/sidebar/user-info')
   <!-- END MINI-PROFILE -->
  
   
   <!-- BEGIN SIDEBAR MENU -->	

	<!-- BEGIN MENUES -->
    <ul>	
    	@include('partials/sidebar/menu/persons')
    	@include('partials/sidebar/menu/contracts')
    	@include('partials/sidebar/menu/building')
    	@include('partials/sidebar/menu/dealings')
    	@include('partials/sidebar/menu/configurations')
    	@include('partials/sidebar/menu/users')
    </ul>
    <!-- END BEGIN MENUES -->

	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
  <!-- END SIDEBAR -->