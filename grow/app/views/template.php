<!DOCTYPE html>
<html class="no-js">
    <head>
        <title><?php echo $title; ?></title>
        <!-- Bootstrap -->
        <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('bootstrap-responsive.min.css'); ?>
        <?php echo Asset::css('jquery.easy-pie-chart.css'); ?>
        <?php echo Asset::css('styles.css'); ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php echo Asset::js('modernizr-2.6.2-respond-1.1.0.min.js'); ?>
    </head>
    
    <body>
        <?php echo View::forge()->render('chunks/menu'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php echo View::forge()->render('chunks/sidebar'); ?>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <?php echo View::forge()->render('chunks/breadcrumbs'); ?>
                        <div class="row-fluid">
                            <?php echo $content; ?>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p><?php echo date('Y'); ?> &copy; gTestugis</p>
        </footer>
        <div id="mview" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h3></h3>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
        <!--/.fluid-container-->
        <?php echo Asset::js('jquery-1.9.1.min.js'); ?>
        <?php echo Asset::js('bootstrap.min.js'); ?>
        <?php echo Asset::js('jquery.easy-pie-chart.js'); ?>
        <?php echo Asset::js('scripts.js'); ?>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>