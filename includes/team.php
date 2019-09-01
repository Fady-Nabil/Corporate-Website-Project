<!-- start team -->
<section class="team section-padding" id="Team">
    <div class="animation" data-animation="fadeIn">
        <div class="team-header">
            <h1>Our Team</h1>
            <p>It is a long established fact that a reader will be distracted by the<br/> readable content of a page when looking at its layout</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="animation" data-animation="zoomIn">
                <ul class="team-carousel">
                <?php
                    $query = "SELECT * FROM team";
                    $select_team_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_team_query)) {
                        $team_name     = $row['team_name'];
                        $team_position = $row['team_position'];
                        $team_desc     = $row['team_desc'];
                        $team_image    = $row['team_image'];
                        $team_facebook = $row['team_facebook'];
                        $team_twitter  = $row['team_twitter'];
                        $team_linkedin = $row['team_linkedin'];
                    ?>
                    <li>
                        <div class="inner-content">
                            <img src="img/team/<?php echo $team_image; ?>">
                            <div class="overlay-content white">
                                <p class="name primary bold"><?php echo $team_name; ?></p>
                                <p class="position secondary-sky-blue bold"><?php echo $team_position; ?></p>
                                <p class="description"><?php echo $team_desc; ?></p>
                                <ul class="member-social-links">
                                    <li><a href="<?php echo $team_facebook; ?>"><i class="fa fa-facebook"></i></a>
                                    </li><li><a href="<?php echo $team_twitter; ?>"><i class="fa fa-twitter"></i></a>
                                    </li><li><a href="<?php echo $team_linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php
                    }//end while
                    ?>   
                </ul>

                <ul class="team-nav">
                    <li id="team-prev">&lt;</li>
                    <li id="team-next">&gt;</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end team -->