<!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
   <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
   <!-- BEGIN SIDEBAR MENU -->	
    <ul>	
    	@include('partials/sidebar/menu/persons')
    	@include('partials/sidebar/menu/contracts')
    	@include('partials/sidebar/menu/building')
    	@include('partials/sidebar/menu/dealings')
    	@include('partials/sidebar/menu/configurations')
    	@include('partials/sidebar/menu/users')
    	<li > 
    		<a href="/#/">
    			<i class="fa fa-power-off"></i>&nbsp;&nbsp;<span class="title">Salir</span>
    		</a>
    	</li>
    </ul>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
  <!-- END SIDEBAR -->