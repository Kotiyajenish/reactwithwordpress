<?php
/*
Template Name: about
*/
get_header();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ajax File Upload with jQuery and PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Ajax File Uploading with Database MySql</h1>
                <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
                    <input id="uploadImage" type="file" accept="image/*" name="image" /><br>
                    <input class="btn btn-success" type="submit" value="Upload">
                </form>
                <div id="err"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery('#form a').on("click", function(e) {
                var cat = $(this).attr('id');
                $.ajax({
                    type: "POST",
                    dateType: "html",
                    url: ajaxurl,
                    data: ({
                        action: 'ajax_upload_image',
                        cat: cat
                    }),
                    success: function(response) {
                        jQuery("#latest_post").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
<?php get_footer(); ?>