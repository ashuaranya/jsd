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
                              action="<?= site_url('project/update/'.$project_obj['project_id']) ?>">
                            <input type="hidden" name="project_id" value="<?= $project_obj['project_id'] ?>" class="form-control">
                            <input type="hidden" name="project_background_image" value="<?= trim($project_obj['project_image']) ? trim($project_obj['project_image']) : '' ?>" class="form-control">
                            <?php echo $session->getFlashdata('sucess_message'); ?>
                            <?php echo $session->getFlashdata('error_message'); ?>
                            <div class="form-group">
                                <label><b>Background Image*</b></label><br>
                                <?php if(trim($project_obj['project_image']) !== "") { ?>
                                    <img accept="image/*" height="150" width="150" src="<?= base_url('assets/uploads/'.$project_obj['project_image']) ?>">
                                <?php } ?><input type="file"  name="project_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Title*</label>
                                <input type="text" value="<?= $project_obj['title'] ?>" name="title" class="form-control">
                            </div>
							<div class="form-group">
                                <label>Details</label>
                                <textarea name="details" class="form-control"><?= $project_obj['details'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>project Order</label>
                                <input type="number" value="<?= $project_obj['project_order'] ?>" name="project_order" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" <?= ($project_obj['is_active'] == 1) ? 'selected' : '' ?>>Active</option>
                                    <option value="0" <?= ($project_obj['is_active'] == 0) ? 'selected' : '' ?>>Deactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main project -->

        <?php
        echo view('common/page_footer.php');
        ?>

    </div>
    <!-- End of project Wrapper -->

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
