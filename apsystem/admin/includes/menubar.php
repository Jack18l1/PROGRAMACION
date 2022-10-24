<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTES</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Panel de Control</span></a></li>
        <li class="header">ADMINISTRACIÓN</li>
        
        
        <li><a href="http://localhost/SASISTENCIA/?ctrl=CtrlAsistencia"><i class="fa fa-suitcase"></i> Asistencia</a></li>
        <li><a href="http://localhost/SASISTENCIA/index.php?ctrl=CtrlUsuarios"><i class="fa fa-file-text"></i> Usuarios</a></li>
        <li><a href="http://localhost/SASISTENCIA/index.php?ctrl=CtrlCargos"><i class="fa fa-suitcase"></i> Cargo</a></li>
        <li><a href="http://localhost/SASISTENCIA/index.php?ctrl=CtrlEmpleado"><i class="fa fa-file-text"></i> Empleado</a></li>

        <li class="header">MAS</li>

        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Horarios</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>