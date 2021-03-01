<?php
echo view('common/header.php');
?>
<body id="page-top">
<div id="wrapper">

    <?php
   echo view('common/leftnav.php');
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php
            echo view('common/topbar.php');
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="md-12">
                    <a href="<?= base_url('project/add') ?>" class="btn btn-primary">Add Project</a>
                </div>
                <!-- Page Heading -->
                <p>&nbsp;</p>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Project List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Order</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Order</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach($projects as $project) :?>
                                <tr>
                                    <td><img accept="image/*" height="50" width="50" src="<?= base_url('assets/uploads/'.$project['project_image']) ?>"></td>
                                    <td><?= $project['title']?></td>
                                    <td><?= $project['details']?></td>
                                    <td><?= $project['project_order']?></td>
                                    <td><?= $project['is_active'] ? "Active" : "InActive"; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('project/edit-content/'.$project['project_id']);?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo base_url('project/delete/'.$project['project_id']);?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php
        echo view('common/page_footer.php');
        ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php
echo view('common/footer_links.php');
?>

<!-- Page level plugins -->
<script src="<?=base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url('assets/js/demo/datatables-demo.js');?>"></script>

</body>
</html>
