<script type="text/javascript" src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jasny-bootstrap/css/jasny-bootstrap.min.css'); ?>"/>
<script type="text/javascript" src="<?php echo base_url('assets/jasny-bootstrap/js/jasny-bootstrap.min.js'); ?>"></script>

<div class="container">
  <form method="post" action="<?php echo site_url("/addnew"); ?>" enctype="multipart/form-data">
      <!-- Title -->
    <div class="control-group <?php echo (form_error('title')?'has-error':''); ?>">
        <label class="control-label" for="title">Title</label>
        <div class="controls">
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            <?php if(form_error('title')){ ?>
            <span class="help-block"><?php echo form_error('title'); ?></span>
            <?php } ?>
        </div>
    </div>
    <br>
    <!-- Body -->
    <div class="control-group <?php echo (form_error('body')?'has-error':''); ?>">
        <label class="control-label" for="body">Content</label>

        <div class="controls">
            <textarea name="body" id="body" cols="30" rows="5" placeholder="Content" class="form-control"></textarea>
            <?php if(form_error('body')){ ?>
                <span class="help-block"><?php echo form_error('body'); ?></span>
            <?php } ?>
        </div>
    </div>
    <br>
    <div class="fileinput fileinput-new control-group <?php echo (form_error('image_path')?'has-error':''); ?>" data-provides="fileinput">
      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 100px;">
      </div>
      <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
              <input type="file" name="image_path" class="form-control" id="image" placeholder="Image">
          <?php if(form_error('image_path')){ ?>
              <span class="help-block"><?php echo form_error('image_path'); ?></span>
          <?php } ?>
       </span>
          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a></div>
    </div>
    </br>
    <input type="submit" value="Save">
  </form>
</div>

  <script>
    window.onload = function () {
       CKEDITOR.replace('body', {
          "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
        });
    };
  </script>