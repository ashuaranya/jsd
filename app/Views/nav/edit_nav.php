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
                        <form method="post" id="add_create" name="add_create"
                              action="<?= site_url('/update') ?>">
                            <input type="hidden" name="nav_id" value="<?= $nav_obj['nav_id'] ?>" class="form-control">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="<?= $nav_obj['title'] ?>" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nav Order</label>
                                <input type="number" value="<?= $nav_obj['nav_order'] ?>" name="nav_order" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" <?= ($nav_obj['is_active'] == 1) ? 'selected' : '' ?>>Active</option>
                                    <option value="0" <?= ($nav_obj['is_active'] == 0) ? 'selected' : '' ?>>Deactive</option>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#add_create").length > 0) {
        $("#add_create").validate({
            rules: {
                title: {
                    required: true,
                },
                nav_order: {
                    required: true,
                },
                is_active: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Title is required.",
                },
                email: {
                    required: "Order is required."
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
