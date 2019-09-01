    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Corporate Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">Corporate</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> 
                    <?php
                    if(isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                </li>
                <li>
                    <a href="links.php"><i class="fa fa-fw fa-bar-chart-o"></i> Links</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-wrench"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="users" class="collapse">
                        <li>
                            <a href="users.php">View All Users</a>
                        </li>
                        <li>
                            <a href="users.php?source=add_user">Add User</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#services"><i class="fa fa-fw fa-arrows-v"></i> Services <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="services" class="collapse">
                        <li>
                            <a href="services.php">View All Services</a>
                        </li>
                        <li>
                            <a href="services.php?source=add_service">Add Service</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#works"><i class="fa fa-fw fa-arrows-v"></i> Works <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="works" class="collapse">
                        <li>
                            <a href="works.php">View All Works</a>
                        </li>
                        <li>
                            <a href="works.php?source=add_works">Add Work</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#team"><i class="fa fa-fw fa-arrows-v"></i> Team <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="team" class="collapse">
                        <li>
                            <a href="team.php">View All Team</a>
                        </li>
                        <li>
                            <a href="team.php?source=add_team">Add Team</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#testimonials"><i class="fa fa-fw fa-arrows-v"></i> Testimonials <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="testimonials" class="collapse">
                        <li>
                            <a href="testimonials.php">View All Testimonials</a>
                        </li>
                        <li>
                            <a href="testimonials.php?source=add_testimonials">Add Testimonials</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#blog"><i class="fa fa-fw fa-arrows-v"></i> Blog<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="blog" class="collapse">
                        <li>
                            <a href="blog.php">View All Blog</a>
                        </li>
                        <li>
                            <a href="blog.php?source=add_blog">Add Blog</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-fw fa-wrench"></i> Profile</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>