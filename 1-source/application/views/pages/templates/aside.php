<aside class="main-sidebar" id="as" style="background-color: #1C2833;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>/<?php

           foreach ($this->data['profile']  as $value) {

            echo $value['profile'];
            
            } 
      
          ?>" class="img-circle" alt="User Image">
          
        </div>
        <div class="pull-left info">
          <p style="color: white;font-size: 16px; margin-top: 10px;"><?php

           foreach ($this->data['user_info']  as $value) {

              $first_name = ucfirst($value['first_name']);
              $last_name = ucfirst($value['last_name']);
              
              echo $first_name." ".$last_name;
            
            } 
      
          ?></p>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="color: white; font-size: 25px; text-align: center; color: red; font-weight: bold; "><?php echo ucfirst($this->session->userdata("username"));?></li>

        <li class="active treeview">
          <a href="#">
            <i class="" style="color:white;"></i> <span style="color: white;font-size: 16px;">Academics</span>
          </a>
        </li>

        <?php

          if($this->session->userdata("username")=="admin"){

            include 'admin_btn.php';

          }elseif($this->session->userdata("username")=="student"){

            include 'student_btn.php';

          }

        ?>


       </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

<script type="text/javascript">


var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );


document.getElementById("as").style.height=height+262+"px";





    
</script>