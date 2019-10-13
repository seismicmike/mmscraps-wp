<?php get_header(); ?>
    <div class="contentLayout">
        <div class="content">

            <div class="Block">
                <div class="Block-tl"></div>
                <div class="Block-tr"></div>
                <div class="Block-bl"></div>
                <div class="Block-br"></div>
                <div class="Block-tc"></div>
                <div class="Block-bc"></div>
                <div class="Block-cl"></div>
                <div class="Block-cr"></div>
                <div class="Block-cc"></div>
                <div class="Block-body">

                    <div class="BlockHeader">
                        <div class="header-tag-icon">
                            <div class="t"><?php _e('Not Found', 'kubrick'); ?></div>
                        </div>
                    </div>
                    <div class="BlockContent">
                        <div class="BlockContent-body">

                            <h2 class="center"><?php _e('Error 404 - Not Found', 'kubrick'); ?></h2>

                        </div>
                    </div>


                </div>
            </div>


        </div>
        <div class="sidebar1">
          <?php include(TEMPLATEPATH . '/sidebar1.php'); ?>
        </div>
        <div class="sidebar2">
          <?php include(TEMPLATEPATH . '/sidebar2.php'); ?>
        </div>

    </div>
    <div class="cleared"></div>

<?php get_footer(); ?>