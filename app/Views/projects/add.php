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
                    <div class="container mt-5">
                        <form enctype="multipart/form-data" method="post" id="add_create" name="add_create"
                              action="<?= site_url('project/submit-form') ?>">
                            <div class="form-group">
                                <label>Background Image*</label>
                                <input accept="image/*" type="file" name="project_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Title*</label>
                                <input type="text" value="" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea name="details" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Project Order</label>
                                <input type="number" value="" name="project_order" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0" >Deactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Add Project</button>
                            </div>
                        </form>
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

<script src="<?=base_url('assets/js/jquery-3.5.1.slim.min.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.validate.js');?>"></script>
<script src="<?=base_url('assets/js/additional-methods.min.js');?>"></script>

<script>
    if ($("#add_create").length > 0) {
        $("#add_create").validate({
            rules: {
                title: {
                    required: true,
                },
                is_active: {
                    required: true,
                }, project_image: {
                    required: true,
                    accept: "image/jpg,image/jpeg,image/png"
                }
            },
            messages: {
                title: {
                    required: "Title is required.",
                },
                project_image: {
                    required: "Image* is required."
                },
                is_active: {
                    required: "Order is required."
                },
            },
        })
    }
</script>
</body>
</html>
