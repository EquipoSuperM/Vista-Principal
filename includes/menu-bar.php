

<style type="text/css">
 
  .hola{
	background:  #FFB039;
  }
  .nav li a{
    background:  #FFD856;
  }
  .nav li a:hover{
    background-color:#434343;
  }
  
    </style>


<div class="header-nav animate-dropdown">
    <div class="hola">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only"> Navegación </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
		<a href="index.php" data-hover="dropdown" class="dropdown-toggle" ><i class="fa fa-home" >	</i> Inicio</a></span>
				
			</li> 
              <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6"); 
while($row=mysqli_fetch_array($sql))
{
    ?>     

			<li class="dropdown yamm"> 
				<a href="category.php?cid=<?php echo $row['id'];?>"> <i class="fa fa-list" ></i> <?php echo $row['categoryName'];?></a>
			
			</li>
			<?php } ?>

			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>

                 </div>
            </div>
        </div>
    </div>
</div>
