<?php include('session.php');  include('header.php'); include('dbcon.php'); ?>
<body>

<?php include('nav-top1.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li class="active">
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
  
   <li class="divider-vertical"></li>
  <li><a href="schedule.php"><i class="icon-group icon-large"></i>Class Schedule</a></li>
  <li><a href="record.php"><i class="icon-list icon-large"></i>Entry</a></li>
   <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
     <li class="divider-vertical"></li>
  <li><a href="user_account.php"><i class="icon-user icon-large"></i>User Account</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">



	

<div id="element" class="hero-body-schedule">
<div class="hero-unit-home">
    <div class="alert alert-info">
   <h2>Welcome to Buksu Computer Laboratory Utilization</h2>
    </div>

	</div>	



	

<div class="sv">
	<div class="hero-unit-mission1">
	<p><h2>Mission</h2></p>
	
	To develop competitive professionals who are committed to build a sustainable life for all through quality instruction, research, extension and production.
	</div>
	
		<div class="hero-unit-mission2">
	<p><h2>Vision</h2></p>
  A premier institution of innovative and ethical leaders for sustainable development.
	
	</div>	
	</div>	
		
	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
	
