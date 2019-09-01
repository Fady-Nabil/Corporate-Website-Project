<!-- start testimonials -->
<section class="testimonials section-padding center animation" data-stellar-background-ratio="0.5" data-animation="fadeInUp" id="Testimonials">
    <div class="testimonials-header">
        <h1 class="white">Client Testimonials</h1>
        <p>It is a long established fact that a reader will be distracted by the<br/> readable content of a page when looking at its layout</p>
    </div>
    <ul class="testimonial-carousel">
        <?php
        $query = "SELECT * FROM testimonials";
        $select_testimonials_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_testimonials_query)) {
            $testimonials_name     = $row['testimonials_name'];
            $testimonials_position = $row['testimonials_position'];
            $testimonials_desc     = $row['testimonials_desc'];
            $testimonials_image    = $row['testimonials_image'];
        ?>
         <li>
            <img src="img/team/<?php echo $testimonials_image; ?>"/>
            <p class="name"><?php echo $testimonials_name; ?></p>
            <p class="position"><?php echo $testimonials_position; ?></p>
            <blockquote>
                <i><?php echo $testimonials_desc; ?></i>
            </blockquote>
        </li>
        <?php
        }
        ?>
    </ul>

    <ul class="testipager">
        <li><a href="#"><i class="fa fa-circle"></i></a>
        </li><li><a href="#"><i class="fa fa-circle"></i></a>
        </li><li><a href="#"><i class="fa fa-circle"></i></a>
        </li><li><a href="#"><i class="fa fa-circle"></i></a>
        </li>
    </ul>
</section>
<!-- end testimonials -->