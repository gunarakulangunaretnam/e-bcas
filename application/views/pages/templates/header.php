 <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('MainPageController/index/') ?>" id="nav_id_2" style="background-color: #17202A;" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color:white;"><b>BCAS  </b>CAMPUS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav id="nav_id" style="background-color: #17202A  ;" class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" style="color:white"; class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>/<?php

           foreach ($this->data['profile']  as $value) {

            echo $value['profile'];
            
            } 
      
          ?>" class="user-image" alt="User Image">
              <span class="hidden-xs" style="color: white; font-size: 16px; font-weight: bold;">Account</span>
            </a>
            <ul class="dropdown-menu" style="background-color: #17202A;">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>/<?php

           foreach ($this->data['profile']  as $value) {

            echo $value['profile'];
            
            } 
      
          ?>" class="img-circle" alt="User Image">

                <p style="color: white; font-size: 16px; font-weight: bold;">
                  <?php

                       foreach ($this->data['user_info']  as $value) {

                        echo $value['first_name']." ".$value['last_name'];
                        
                        } 
      
                  ?>
                 
                </p>
              </li>
                         
              <!-- Menu Footer-->
              
              <li class="user-footer" style="background-color: #212F3D;">
               
                <div class="pull-left">
                  <a style="font-size: 16px; font-weight: bold;" href="<?php echo site_url('MainPageController/ProgfileManagement/') ?>" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-cog"></span> Settings</a>
                </div>

                <div class="pull-right" id="settingBtn">
                  
                  <?php echo form_open('logins/log');?>
                  
                  <form method="post">

                  <div class="container-login100-form-btn">
                  
                    <button style="font-size: 16px; font-weight: bold;" class="btn btn-danger btn-flat" name="log">
                     <span class="glyphicon glyphicon-log-out"></span>  Logout
                    
                    </button>
                  
                  </div>

                  </form>
              </div>
              
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>

  </header>


