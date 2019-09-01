<!-- start portfolio -->
<section class="portfolio section-padding" data-stellar-background-ratio="0.5" id="Portfolio">
    <div class="animation" data-animation="fadeIn">
        <div class="portfolio-header">
            <h1 class="white">Our Works</h1>
            <p>It is a long established fact that a reader will be distracted by the<br/> readable content of a page when looking at its layout</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="animation" data-animation="fadeInUp">
                <ul class="portfolio-carousel">
                <?php
                $query = "SELECT * FROM works";
                $select_works_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_works_query)) {
                    $work_name = $row['work_name'];
                    $work_image = $row['work_image'];
                    ?>
                    <li>
                        <div class="inner-content">
                            <img src="img/portfolio/<?php echo $work_image; ?>">
                            <div class="overlay-content">
                                <h3><?php echo $work_name; ?></h3>
                                <p><a href="#">Click here</a> for details</p>
                            </div>
                        </div>
                    </li>
                    <?php
                }//end while
                    ?>
                </ul>

                <ul class="portfolio-nav">
                    <li id="prev">&lt;</li>
                    <li id="next">&gt;</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end portfolio -->