<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <script src="//cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <img src="<?php echo base_url(); ?>images/book1.jpg" alt="" class="img-fluid img_size responsive">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h3 class="card-title main-heading"><strong>Grievance and Redressal</strong></h3>
        </div>
      </div>
      <div class="container container-secondary">
        <div class="row center-block">
          <div class="col-lg-11">
            <h4  class="text-center" style="padding:10px;">Select your complaint type</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <form method="post">
              <div class="form-group">
                <select class="custom-select">
                  <option selected="" value=" "><strong>I want to complaint about ..</strong></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </form>
          </div>
        </div>

          <div class="row center-block">
            <div class="col-lg-11">
              <h4  class="text-center" style="padding:10px;">Furnish your complaints below</h4>
            </div>
          </div>

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
          </div>
        </div>
      </div>
    </div>
    <script>
    CKEDITOR.replace('editor1', {
      extraPlugins: 'uploadimage,image2',
      height: 300,

      // Upload images to a CKFinder connector (note that the response type is set to JSON).
      uploadUrl: '/apps/ckfinder/3.4.4/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
      filebrowserBrowseUrl: '/apps/ckfinder/3.4.4/ckfinder.html',
      filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.4/ckfinder.html?type=Images',
      filebrowserUploadUrl: '/apps/ckfinder/3.4.4/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: '/apps/ckfinder/3.4.4/core/connector/php/connector.php?command=QuickUpload&type=Images',

      // The following options are not necessary and are used here for presentation purposes only.
      // They configure the Styles drop-down list and widgets to use classes.

      stylesSet: [{
          name: 'Narrow image',
          type: 'widget',
          widget: 'image',
          attributes: {
            'class': 'image-narrow'
          }
        },
        {
          name: 'Wide image',
          type: 'widget',
          widget: 'image',
          attributes: {
            'class': 'image-wide'
          }
        }
      ],

      // Load the default contents.css file plus customizations for this sample.
      contentsCss: [
        'http://cdn.ckeditor.com/4.11.2/full-all/contents.css',
        'assets/css/widgetstyles.css'
      ],

      // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
      // resizer (because image size is controlled by widget styles or the image takes maximum
      // 100% of the editor width).
      image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
      image2_disableResizer: true
    });
  </script>
  </body>
</html>
