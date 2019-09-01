<body id="main">
<!-- start body content -->
<div class="entire-content">
    <!-- start header -->
    <header>
        <div class="container">
            <div class="row">
                <a class="logo animation" href="index.php" data-animation="fadeInLef"><img src="img/logo.png" alt="logo"/></a>
                <nav class="animation" data-animation="fadeInRight">
                    <ul class='menu' id='menu'>
                    <?php
                    $query = "SELECT * FROM links";
                    $select_links_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_links_query)) {
                        $link_name = $row['link_name'];
                        ?>
                        <li>
                            <a href="#<?php echo $link_name; ?>"><?php echo $link_name; ?></a>
                        </li>
                        <?php    
                    }//end while
                    ?>
                    <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!-- end header -->