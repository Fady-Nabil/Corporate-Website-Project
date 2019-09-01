<!-- start services -->
<section class="services section-padding" id="Services">
    <div class="services-header">
        <div class="animation" data-animation="fadeIn">
            <h1>Our Services</h1>
            <p>It is a long established fact that a reader will be distracted by the<br/> readable content of a page when looking at its layout</p>
        </div>
    </div>
    <div class="services-content">
        <div class="container">
            <div class="row">
                <?php
                $query = "SELECT * FROM services LIMIT 3";
                $select_services_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_services_query)) {
                    $services_name = $row['services_name'];
                    $services_desc = $row['services_desc'];
                    ?>
                    <div class="col-md-4">
                        <div class="animation" data-animation="fadeInLeft">
                            <p><i class="fa fa-laptop"></i></p>
                            <h3><?php echo $services_name; ?></h3>
                            <p><?php echo $services_desc; ?></p>
                        </div>
                    </div>
                    <?php
                }//end while
                ?>  
            </div>

            <br/>

            <div class="row">
            <?php
                $query = "SELECT * FROM services WHERE services_id != 1 AND services_id != 2 AND services_id != 3";
                $select_services_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_services_query)) {
                    $services_name = $row['services_name'];
                    $services_desc = $row['services_desc'];
                    ?>
                    <div class="col-md-4">
                        <div class="animation" data-animation="fadeInLeft">
                            <p><i class="fa fa-laptop"></i></p>
                            <h3><?php echo $services_name; ?></h3>
                            <p><?php echo $services_desc; ?></p>
                        </div>
                    </div>
                    <?php
                }//end while
                ?>    
            </div>
        </div>
    </div>
</section>
<!-- end services -->