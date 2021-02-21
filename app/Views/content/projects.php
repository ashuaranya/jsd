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
                              action="<?= site_url('content/update/'.$content_obj['content_type']) ?>">
                            <input type="hidden" name="content_id" value="<?= $content_obj['content_id'] ?>" class="form-control">
                            <input type="hidden" name="content_background_image" value="<?= trim($content_obj['background_image']) ?>" class="form-control">
                            <?php echo $session->getFlashdata('sucess_message'); ?>
                            <?php echo $session->getFlashdata('error_message'); ?>
                            <div class="form-group">
                                <label><b>Background Image</b></label><br>
                                <img accept="image/*" height="150" width="150" src="<?= base_url('assets/uploads/'.$content_obj['background_image']) ?>">
                                <input type="file"  name="background_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><b>Heading</b></label>
                                <textarea id="heading" type="text" name="heading" class="form-control">
                                    <?= $content_obj['heading'] ?>
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label><b>Sub Heading</b></label>
                                <textarea  id="subheading" type="text" name="subheading" class="form-control">
                                    <?= $content_obj['subheading'] ?>
                                </textarea>
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
<script src="<?=base_url('assets/js/jquery-3.5.1.slim.min.js');?>"></script>
<script src="<?=base_url('assets/js/jquery.validate.js');?>"></script>
<script src="<?=base_url('assets/js/additional-methods.min.js');?>"></script>
<script src="<?=base_url('assets/js/ckeditor.js');?>"></script>
<script>

    ClassicEditor
        .create( document.querySelector( '#heading' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#subheading' ) )
        .catch( error => {
            console.error( error );
        } );

    if ($("#add_create").length > 0) {
        $("#add_create").validate({
            rules: {
                heading: {
                    required: true,
                },
                subheading: {
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
<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
</style>
</body>
</html>
