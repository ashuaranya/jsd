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

                <!-- Page Heading -->
                <p>&nbsp;</p>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Navbar</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Nav Id</th>
                                    <th>Title</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nav Id</th>
                                    <th>Title</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach($navs as $nav) :?>
                                <tr>
                                    <td><?= $nav['nav_id']?></td>
                                    <td><?= $nav['title']?></td>
                                    <td><?= $nav['nav_order']?></td>
                                    <td>
                                        <a href="<?php echo base_url('edit-view/'.$nav['nav_id']);?>" class="btn btn-primary btn-sm">Edit</a>
<!--                                        <a href="--><?php //echo base_url('delete/'.$nav['nav_id']);?><!--" class="btn btn-danger btn-sm">Delete</a>-->

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
