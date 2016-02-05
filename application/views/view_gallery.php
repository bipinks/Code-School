<div class="table-responsive">
    <h3><?php echo $stud['name']; ?></h3>
    <div class="col-lg-2"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-2"><a href="<?php echo base_url('club/upload_images/'.$id); ?>" class="btn btn-info">Upload Images</a>
    <table class="table table-striped">
        <tbody>

        <?php if(!empty($result)) {

            var_dump($result);
            die;

            ?>
            <tr>
                <td>Imah3e</td>
            </tr>
       <?php  }
        else { ?>
            <tr>
                <td>No images found</td>
            </tr>
       <?php }
        ?>


        </tbody>
    </table>
</div>