<?php include "includes/admin_header.php" ?>


    <div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To
                            <small>
                            <?php 
                            if(isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                            }
                            ?>
                            </small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <!-- dashboard -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $query = "SELECT * FROM services";
                                        $select_all_services = mysqli_query($connection,$query);
                                        $services_counts = mysqli_num_rows($select_all_services);
                                    ?>
                                        <div class='huge'><?php echo $services_counts; ?></div>
                                            <div>Services</div>
                                    </div>
                                </div>
                            </div>
                            <a href="services.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $query = "SELECT * FROM works";
                                        $select_all_works = mysqli_query($connection,$query);
                                        $works_counts = mysqli_num_rows($select_all_works);
                                    ?>
                                        <div class='huge'><?php echo $works_counts; ?></div>
                                            <div>Works</div>
                                    </div>
                                </div>
                            </div>
                            <a href="works.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $query = "SELECT * FROM team";
                                        $select_all_team = mysqli_query($connection,$query);
                                        $team_count = mysqli_num_rows($select_all_team);
                                    ?>
                                    <div class='huge'><?php echo $team_count ?></div>
                                    <div>Members</div>
                                    </div>
                                </div>
                            </div>
                            <a href="team.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php
                                        $query = "SELECT * FROM testimonials";
                                        $select_all_testimonials = mysqli_query($connection,$query);
                                        $testimonials_counts = mysqli_num_rows($select_all_testimonials);
                                    ?>
                                    <div class='huge'><?php echo $testimonials_counts ?></div>
                                        <div>Testimonials</div>
                                    </div>
                                </div>
                            </div>
                            <a href="testimonials.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM users";
                                            $select_all_users = mysqli_query($connection,$query);
                                            $users_counts = mysqli_num_rows($select_all_users);
                                        ?>
                                        <div class='huge'><?php echo $users_counts ?></div>
                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM blog";
                                            $select_all_blog = mysqli_query($connection,$query);
                                            $blog_counts = mysqli_num_rows($select_all_blog);
                                        ?>
                                        <div class='huge'><?php echo $blog_counts ?></div>
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="blog.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- charts -->
                <?php
                    //query for services
                    $query = "SELECT * FROM services";
                    $select_all_services = mysqli_query($connection,$query);
                    $services_counts = mysqli_num_rows($select_all_services);

                    //query for draft posts
                    $query = "SELECT * FROM works";
                    $select_all_works = mysqli_query($connection,$query);
                    $works_counts = mysqli_num_rows($select_all_works);

                    //query for team
                    $query = "SELECT * FROM team";
                    $select_all_team = mysqli_query($connection,$query);
                    $team_counts = mysqli_num_rows($select_all_team);
                    
                    //query for subscribers
                    $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
                    $select_all_subscribers = mysqli_query($connection,$query);
                    $subscribers_count = mysqli_num_rows($select_all_subscribers);

                    //query for users
                    $query = "SELECT * FROM users WHERE user_role = 'admin'";
                    $select_all_users = mysqli_query($connection,$query);
                    $users_count = mysqli_num_rows($select_all_users);

                    //query for testimonials
                    $query = "SELECT * FROM testimonials";
                    $select_all_testimonials = mysqli_query($connection,$query);
                    $testimonials_count = mysqli_num_rows($select_all_testimonials);
                ?>
                <div class="row">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],
                            <?php
                               $element_text = ['All Services','All Works', 'All Team Members','All Subscribers','All Admins','All Testimonials'];
                               $element_count = [$services_counts, $works_counts, $team_counts, $subscribers_count, $users_count, $testimonials_count];

                               for($i= 0; $i< 6; $i++) {
                                    echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                               }
                            ?>
                            //['posts', 1000],
                            ]);
                            var options = {
                            chart: {
                                title: '',
                                subtitle: '',
                            }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script><!--script -->
                    <!-- this div to make charts work -->
                    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>
