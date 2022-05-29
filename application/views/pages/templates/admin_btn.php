        <li class="treeview">
          <a href="#">
            <i class="menu-icon fa fa-group" style="color: white;"></i>
            <span style="color: white;">Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/registerStundet/') ?>" style="color: white;"><i class="fa fa-user-plus" style="color: white; font-size: 16px;"></i> &nbsp Register Student</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageStundet/') ?>" style="color: white;"><i class="fa fa-id-card-o"  style="color: white; font-size: 16px;"></i> &nbsp Manage Student</a></li>
          </ul>
          
        </li>


        <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-user" style="color: white;"></i>
            <span style="color: white;">Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/registerStaff/') ?>" style="color: white;"><i class="fa fa-user-plus" style="color: white; font-size: 16px;"></i> &nbsp Register Staff</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageStaff/') ?>" style="color: white;"><i class="fa fa-id-card-o"  style="color: white; font-size: 16px;"></i> &nbsp Manage Staff</a></li>
          </ul>
          
        </li>


          <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-list-alt" style="color: white;"></i>
            <span style="color: white;">Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/registerCourses/') ?>" style="color: white;"><i class="glyphicon glyphicon-book" style="color: white; font-size: 16px;"></i> &nbsp Add Courses</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageCourses/') ?>" style="color: white;"><i class="glyphicon glyphicon-edit"  style="color: white; font-size: 16px;"></i> &nbsp Manage Courses</a></li>
          </ul>
          
        </li>

          <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-education" style="color: white;"></i>
            <span style="color: white;">Batches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/registerBatches/') ?>" style="color: white;"><i class="glyphicon glyphicon-book" style="color: white; font-size: 16px;"></i> &nbsp Add Batches</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageBatches/') ?>" style="color: white;"><i class="glyphicon glyphicon-edit"  style="color: white; font-size: 16px;"></i> &nbsp Manage Batches</a></li>
          </ul>
          
        </li>

         <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-briefcase" style="color: white;"></i>
            <span style="color: white;">Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/registerDepartment/') ?>" style="color: white;"><i class="glyphicon glyphicon-book" style="color: white; font-size: 16px;"></i> &nbsp Add Department</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageDepartment/') ?>" style="color: white;"><i class="glyphicon glyphicon-edit"  style="color: white; font-size: 16px;"></i> &nbsp Manage Department</a></li>
          </ul>
          
        </li>


         <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-book" style="color: white;"></i>
            <span style="color: white;">Module</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/registerModule/') ?>" style="color: white;"><i class="glyphicon glyphicon-floppy-open" style="color: white; font-size: 16px;"></i> &nbsp Add Module</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageModule/') ?>" style="color: white;"><i class="glyphicon glyphicon-edit"  style="color: white; font-size: 16px;"></i> &nbsp Manage Module</a></li>
          </ul>  
        </li>


         <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-edit" style="color: white;"></i>
            <span style="color: white;">Result</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/provideResult/') ?>" style="color: white;"><i class="glyphicon glyphicon-floppy-open" style="color: white; font-size: 16px;"></i> &nbsp Provide Result</a></li>
            <li><a href="<?php echo site_url('MainPageController/searchResults/') ?>" style="color: white;"><i class="glyphicon glyphicon-edit"  style="color: white; font-size: 16px;"></i> &nbsp Manage Result</a></li>
          </ul>  
        </li>


         <li class="treeview">
          <a href="#">
            <i class="menu-icon glyphicon glyphicon-user" style="color: white;"></i>
            <span style="color: white;">Student Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">       
            <li><a href="<?php echo site_url('MainPageController/createUserAccounts/') ?>" style="color: white;"><i class="glyphicon glyphicon-floppy-open" style="color: white; font-size: 16px;"></i> &nbsp Create Accounts</a></li>
            <li><a href="<?php echo site_url('MainPageController/manageAccounts/') ?>" style="color: white;"><i class="glyphicon glyphicon-edit"  style="color: white; font-size: 16px;"></i> &nbsp Manage Accounts</a></li>
          </ul>  
        </li>