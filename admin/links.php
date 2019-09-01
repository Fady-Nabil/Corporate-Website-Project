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
                            <small>Author</small>
                        </h1>
                    </div>
                    <div class="col-xs-6">
                        <?php insert_links(); ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="link_name">Add Link</label>
                                <input class="form-control" type="text" name="link_name">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Link">
                            </div>
                        </form>
                        <?php
                        /* 
                        this to display the edit category form when user click on edit button 
                        update and include query
                        */
                        include_update_links();
                        ?>
                    </div>
                    <div class="col-xs-6">
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Link Name</th>
                                   <th>Edit</th>
                                   <th>Delete</th>
                               </tr>
                           </thead>
                           <tbody>
                            <?php find_all_links(); ?>
                            <?php delete_links(); ?>    
                           </tbody>
                       </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

<?php include "includes/admin_footer.php"; ?>