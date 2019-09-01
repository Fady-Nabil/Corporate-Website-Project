<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>
                                
                            </small>
                        </h1>
                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }
                    switch($source) {
                        case 'add_team';
                        include "includes/add_team.php";
                        break;
                        
                        case 'edit_team';
                        include "includes/edit_team.php";
                        break;
                        
                        default:
                        include "includes/view_all_team.php";
                        break;
                    }
                    ?>   
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

<?php include "includes/admin_footer.php"; ?>