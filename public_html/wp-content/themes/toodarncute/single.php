<?php get_header(); ?>
<div class="contentLayout">
<div class="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$prev_link = get_previous_post_link('&laquo; %link');
$next_link = get_next_post_link('%link &raquo;');
?>
<?php if ($prev_link || $next_link): ?>
<div class="Post">
    <div class="Post-tl"></div>
    <div class="Post-tr"></div>
    <div class="Post-bl"></div>
    <div class="Post-br"></div>
    <div class="Post-tc"></div>
    <div class="Post-bc"></div>
    <div class="Post-cl"></div>
    <div class="Post-cr"></div>
    <div class="Post-cc"></div>
    <div class="Post-body">
<div class="Post-inner article">

<div class="PostContent">

<div class="navigation">
	<div class="alignleft"><?php echo $prev_link; ?></div>
	<div class="alignright"><?php echo $next_link; ?></div>
</div>

</div>
<div class="cleared"></div>


</div>

    </div>
</div>

<?php endif; ?>
<div class="Post">
    <div class="Post-tl"></div>
    <div class="Post-tr"></div>
    <div class="Post-bl"></div>
    <div class="Post-br"></div>
    <div class="Post-tc"></div>
    <div class="Post-bc"></div>
    <div class="Post-cl"></div>
    <div class="Post-cr"></div>
    <div class="Post-cc"></div>
    <div class="Post-body">
<div class="Post-inner article">
<h2 class="PostHeaderIcon-wrapper">
<span class="PostHeader"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
<?php the_title(); ?>
</a></span>
</h2>
<?php $icons = array(); ?>
<?php if (!is_page()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostDateIcon.png" width="18" height="18" alt="PostDateIcon" />
<?php the_time(__('F jS, Y', 'kubrick')) ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostAuthorIcon.png" width="18" height="18" alt="PostAuthorIcon" />
<?php _e('Author', 'kubrick'); ?>: <a href="#" title="<?php _e('Author', 'kubrick'); ?>"><?php the_author() ?></a>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (current_user_can('edit_post', $post->ID)): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostEditIcon.png" width="14" height="14" alt="PostEditIcon" />
<?php edit_post_link(__('Edit', 'kubrick'), ''); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (0 != count($icons)): ?>
<div class="PostHeaderIcons metadata-icons">
<?php echo implode(' | ', $icons); ?>

</div>
<?php endif; ?>
<div class="PostContent">
<?php if (is_search()) the_excerpt(); else the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>

</div>
<div class="cleared"></div>
<?php $icons = array(); ?>
<?php if (!is_page()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostCategoryIcon.png" width="18" height="18" alt="PostCategoryIcon" />
<?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page() && get_the_tags()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostTagIcon.png" width="7" height="13" alt="PostTagIcon" />
<?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', ' '); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page() && !is_single()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostCommentsIcon.png" width="18" height="18" alt="PostCommentsIcon" />
<?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (0 != count($icons)): ?>
<div class="PostFooterIcons metadata-icons">
<?php echo implode(' | ', $icons); ?>

</div>
<?php endif; ?>

</div>

    </div>
</div>

<?php if ($prev_link || $next_link): ?>
<div class="Post">
    <div class="Post-tl"></div>
    <div class="Post-tr"></div>
    <div class="Post-bl"></div>
    <div class="Post-br"></div>
    <div class="Post-tc"></div>
    <div class="Post-bc"></div>
    <div class="Post-cl"></div>
    <div class="Post-cr"></div>
    <div class="Post-cc"></div>
    <div class="Post-body">
<div class="Post-inner article">

<div class="PostContent">

<div class="navigation">
	<div class="alignleft"><?php echo $prev_link; ?></div>
	<div class="alignright"><?php echo $next_link; ?></div>
</div>

</div>
<div class="cleared"></div>


</div>

    </div>
</div>

<?php endif; ?>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>
<?php endif; ?>

</div>
<div class="sidebar1">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
</div>
<div class="sidebar2">
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>

</div>
<div class="cleared"></div>

<?php get_footer(); ?>