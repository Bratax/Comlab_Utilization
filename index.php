
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>

<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more').hide();
		
		 $("#click").click(function () {
      $(".more").toggle("slow");
      $("#click").hide("slow");
    });
	
	

		
		});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more1').hide();
		
		 $("#click1").click(function () {
      $(".more1").toggle("slow");
      $("#click1").hide("slow");
    });
	
	

		
		});
</script>

</head> 
<body>

<div class="coat">

<div class="wrapper_home">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner1">
  <div class="nav_jkl">
    <div class="container">
<ul class="nav">
<a class="brand" href="#">
<font color="white">Cromputer Laboratory Utilization</font>
</a>
  <li class="active">
    <a href="index.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
    <ul class="dropdown-menu">

      <li><a data-toggle="modal" href="#exam_teacher">Teacher</a></li>
      <li><a  data-toggle="modal" href="#exam_CYS">Course Year Section</a></li>
      <li><a data-toggle="modal" href="#exam_room">Room</a></li>
    
    </ul>
  </li>
   <li class="divider-vertical"></li>
  <li class="dropdown">
    <ul class="dropdown-menu">
     
      <li><a data-toggle="modal" href="#teacher">Teacher</a></li>
      <li><a data-toggle="modal" href="#CYS">Course Year Section</a></li>
      <li><a href="#room"  data-toggle="modal">Room</a></li>
    
    </ul>

    <li class="divider-vertical"></li>
  <li><a href="admin/index.php" class="admin"><i class="icon-user icon-large"></i>Admin Login</a></li>
 
	</ul>
    </div>
    </div>
  </div>
</div>
</div>

<div class="hero-unit">
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="img/1.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/2.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/3.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/4.jpg" width="1090" height="250"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>

<div class="hero-unit-bud">
<div class="jkl">
<a href="http://www.facebook.com/" class="facebook"><img src="img/facebook.png"/></a>&nbsp;&nbsp;<img src="img/email_32.png"/>&nbsp;&nbsp;<img src="img/rss_32.png"/>&nbsp;&nbsp;<img src="img/twitter_32.png"/>
&nbsp;&nbsp;<img src="img/blogger.png"/>
</div>
<ul class="nav nav-tabs"> 
  <li class="active"><a class="news" href="#home" data-toggle="tab"><font color="white"><i class="icon-list-alt icon-large"></i></font><font color="orange">News And Events</font></a></li>
  <li><a class="about" href="#profile" data-toggle="tab"><font color="white"><i class=" icon-info-sign icon-large"></i></font><font color="orange">About Buksu</a></font></li>
  <li><a class="site" href="#settings" data-toggle="tab"><font color="white"><i class="icon-sitemap icon-large"></i></font><font color="orange">Site Map</a></font></li>

</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  
<p><h3>Buksu holds Turnover Ceremony for College Presidency</h3></p>
<p>By Author</p>
<hr width="700">
<div class="index-text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis nesciunt quibusdam odit! Aut libero est sed, maxime quia, impedit aliquid iure, aliquam nobis blanditiis eum recusandae possimus sequi doloremque quae.
<p>Dr. Sorolla stated all his primary visions, plans, and programs for the College.</p>

<div class="more1">
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt rem quasi praesentium voluptatem nostrum, dicta quidem, ullam at ab nemo non excepturi exercitationem optio quibusdam adipisci nobis placeat. Laboriosam.
</div>

<button class="btn btn-info" id="click1"><i class="icon-share icon-large"></i>&nbsp;Read More</button>

</div>



     </div>
	</br>
  <div class="hero-unit-y">
<p><h3>President Take oath of Office</h3></p>
<hr>

<p>By Author</p>


Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ex, magnam itaque corrupti corporis mollitia qui amet consequatur commodi sunt. Similique, mollitia expedita! Labore et totam eligendi, obcaecati deleniti soluta.
</br>
</br>
<div class="more">
<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque fugit, eum dolorem nulla laudantium excepturi iusto perferendis dolorum unde. Quas maxime cum iste aspernatur recusandae accusantium tempore soluta id facere?
 </p>
</div>

<button class="btn btn-info" id="click"><i class="icon-share icon-large"></i>&nbsp;Read More</button>
 </div>
  </div>
  
  <div class="tab-pane" id="profile">
    <div class="hero-unit-y">
  <div class="hero-unit-y">
  <div class="about_nav">

  <ul class="nav nav-tabs nav-stacked">
 
<ul class="nav nav-tabs nav-stacked">
  <li class="active"><a href="#"><font color="white"><i class="icon-book icon-large"></i></font><font color="orange">History</font></a></li>
  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mission</font></a></li>
  <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Vision</font></a></li>
  <li><a data-toggle="modal" href="#mandate"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mandate</font></a></li>
  <li><a data-toggle="modal" href="#hymm"><font color="white"><i class=" icon-music icon-large"></i></font><font color="orange">Chmsc Hymm</font></a></li>


</ul>
</ul>
  
  </div>


  <div class="history_chmsc">
  <p><h2>Buksu History</h2></p>
  <hr>
  <p>
  First decade: 1924-1934
The Bukidnon State College was known as the Bukidnon Provincial High School when it started offering education courses in 1924, to produce elementary school teachers. On October 1927 it acquired a 6.02-hectare of land area, on which most of the present school buildings are housed. In the succeeding year, it was converted into a normal school and was then renamed as the Bukidnon Normal School. A training department was also started during this period.

Second decade: 1934-1944
The Commonwealth government mandated the school to carry out its task of “developing moral character, personal discipline, civic conscience, and vocational efficiency.” However, the school had to close during World War II, on December 9, 1941, even as it was making a slight headway towards acquiring a collegiate status.

Third decade: 1944-1954
The school re-opened on September 1, 1945. Classes were held in Army tents at the provincial capitol grounds in Malaybalay and in private homes. Nipa-roofed buildings served as classrooms in 1947 until new, semi-permanent structures were built from war damage claims on February 11, 1950, and from ICA-NEC funds in 1957. Mr. Pacifico A. Ramos assumed his post as principal. The secondary curriculum was phased out to give way to the 2-year special education courses starting school year 1952-53.

Fourth decade: 1954-1964
This era was marked by the shedding off of the outmoded curricula. Thus, the total phase-out of the secondary course was done in 1956 and the 2-year special curricula was discontinued in the following year. Kindergarten classes were opened. Graduate studies began in 1960 and were carried out in external study centers located in the neighboring towns and provinces. The school became an independent school division and the administrator was granted the rank of superintendent in 1961.

Fifth decade: 1964-1974
Congressmen Carlos Fortich and Benjamin Tabios, attempted to elevate the school’s status into a national teacher’s college. In June 1971, the Bachelor of Science in Secondary School Education was offered and the high school training department was also added. The Bukidnon Normal School was renamed Bukidnon Normal College in 1972.

Sixth decade: 1974-1984
The first master’s graduate was produced in 1975. Dr. Jaime M. Gellor succeeded Supt. Ramos on May 1976. With the issuance of P.D. 944, the Bukidnon Normal College was converted into Bukidnon State College on June 14, 1976. Dr. Gellor was appointed as the first president of the school on April 21, 1977. More permanent buildings were constructed.

Seventh decade: 1984-1994
Continuing infrastructure build-up was made. In 1986, Dr. Teresita T. Tumapon was appointed as the second president. More course offerings and organizational restructuring occurred. The new administration also pushed for more development projects.

1994-1998
As the school entered its eight decade, Dr. Tumapon strived to realize her vision for an innovative college. Linkages with external and internal groups were strengthened. Programs on Information Technology and Instructional Systems Design were introduced.

1999 to 2007
Dr. Victor M. Barroso was appointed as the third BSC President. He immediately mobilized his new team members to institute significant changes in the academic and administrative aspects of the college, which promise a continuing development to meet the challenges of the 21st century.

2007 to 2015
The College obtained the University status with RA 9456 converting BSC to BSU, signed by President Gloria Macapagal-Arroyo. Dr. Victor M. Barroso was inaugurated the first BSU President, a vision fulfilled when he applied for presidency in 1999. Rigorous improvements were aligned to address the global perspective of the University.

2015 to Present
Dr. Oscar B. Cabañelez is the second President of Bukidnon State University. He replaced Dr. Victor M. Barroso, who retired on January 12, 2015. Since Dr. Cabañelez assumed presidency on January 13, 2015, he placed emphasis on quality education services. Driven by his commitment to raise the level of quality and stakeholders satisfaction, he continued to pursue the university’s quest for ISO 9001: 2008 certification.
 </div>
 </div>
 </div>
  </div>

  <div class="tab-pane" id="settings">
  <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Bukidnon state universit&t=k&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>

  </div>

  
  
  
</div>
</div>
<div class="hero-unit-bud">
 <div class="hero-unit-yy">
<p><font color="white"><b>Related Sites</b></font></p>
<a href="https://buksu.edu.ph/"><font color="white">Bukidnon State University Website</font></a> 
</div>
</div>
<?php include('footer.php'); ?>
</div>
</div>


</body>


<div class="modal hide fade" id="pic">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<div class="turn">
<img src="img/turnover.jpg" width="500" height="350"/>
</div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <p>Mission</p>
	      <p>To develop competitive professionals who are committed to build a sustainable life for all through quality instruction, research, extension and production.</p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		<div class="modal hide fade" id="vision">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <p>Vission</p>
  <p> A premier institution of innovative and ethical leaders for sustainable development. </p>

	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
  </div>
		

		



<!--
   
  <h2>Search Teacher Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333">
	<option>--Select--</option>
		<?php $teacher_query=mysqli_query($conn,"select * from teacher")or die(mysqli_error());
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['Name'] ?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
				
				
								<div class="modal hide fade" id="CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">


  <h2>Search Course Year Section Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Course Year Section:</label>
    <div class="controls">
   <select name="CYS" class="span333">
	<option>--Select--</option>
	<?php $CYS_query=mysqli_query($conn,"select * from course")or die(mysqli_error());
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course_year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
					<div class="modal hide fade" id="room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
	<option>--Select--</option>
	<?php $room_query=mysqli_query($conn,"select * from room")or die(mysqli_error());
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
	
	
					<div class="modal hide fade" id="exam_teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

	    
  
  <h2>Search Teacher Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333">
	<option>--Select--</option>
		<?php $teacher_query=mysqli_query($conn,"select * from teacher")or die(mysqli_error());
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['Name'] ?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	  

 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		
					<div class="modal hide fade" id="exam_room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
	<option>--Select--</option>
	<?php $room_query=mysqli_query($conn,"select * from room")or die(mysqli_error());
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
					
								<div class="modal hide fade" id="exam_CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

 
  <h2>Search Course Year Section Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Course Year Section:</label>
    <div class="controls">
   <select name="CYS" class="span333">
	<option>--Select--</option>
	<?php $CYS_query=mysqli_query($conn,"select * from course")or die(mysqli_error());
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course_year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
-->
			
		
</html>



