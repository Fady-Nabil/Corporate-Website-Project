<!-- start blog -->
<section class="section-padding blog" id="blog">
    <div class="blog-header animation center" data-animation="fadeIn">
        <h1>Recent Posts from Blog</h1>
        <p>It is a long established fact that a reader will be distracted by the<br/> readable content of a page when looking at its layout</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM blog";
            $select_blog_query = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_blog_query)) {
                $blog_team_id     = $row['blog_team_id'];
                $blog_title       = $row['blog_title'];
                $blog_content     = $row['blog_content']; 
                $blog_image       = $row['blog_image'];
                $blog_date        = $row['blog_date']; 
            ?>
            <div class="col-md-4">
                <div class="animation" data-animation="fadeInLeft">
                    <img src="img/blog/<?php echo $blog_image; ?>" alt="post1" class="img-responsive" />
                    <h3><a href="#" class="secondary-sky-blue"><?php echo $blog_title; ?></a></h3>
                    <p class="post-description">
                        <i>by</i> 
                        <b>
                            <?php
                            $query = "SELECT * FROM team WHERE team_id = {$blog_team_id}";
                            $select_team_post_query = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($select_team_post_query)) {
                                $team_name = $row['team_name'];
                            ?>
                            <span class="primary">
                                <?php echo $team_name; ?>
                            </span>
                            <?php
                            }//end while
                            ?>
                        </b> 
                        <i>on</i> 
                    <b class="date"><?php echo $blog_date;  ?></b>
                    </p>
                    <p class="post-content"> <?php echo $blog_content; ?></p>
                </div>
            </div>
            <?php
            }//end while
            ?>    
        </div>
    </div>
</section>
<!-- end blog -->