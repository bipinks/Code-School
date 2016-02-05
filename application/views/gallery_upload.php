<!--<div class="contact_top">-->
<div style="
background: #f3f3f3;">
    <div class="container">
        <div class="col-md-8 contact_left">
            <div class = "page-header">

                <h4>
                    Add Students to your club
                </h4>

            </div>
            <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>-->
            <?php $attributes = array('id' => 'upload_images'); ?>
            <?php echo form_open_multipart('club/upload_images/2',$attributes); ?>
            <div class="form_details form form-horizontal" role="form">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="upload_images">Upload Images:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="upload_images" name="upload_images[]" maxlength="10000"  multiple >
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
                    </div>
                </div>
                <!---->
                <!---->
                <!--                    </table>-->

                <!--                    <div class="sub-button">-->
                <!--                        <input type="submit" value="Add Student">-->
                <!--                    </div>-->
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
    <!--</div>-->
</div>