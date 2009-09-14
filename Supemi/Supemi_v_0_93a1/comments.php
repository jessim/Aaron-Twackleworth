<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if($comments) : ?>  

<div class="go_bold_supemi"><?php comments_number('0 responses','1 response','% responses'); ?></div>

    <ol>  

     <?php foreach($comments as $comment) : ?>  

         <li class="each_comment_supemi" id="comment-<?php comment_ID() ?>">  
             <?php if ($comment->comment_approved == '0') : ?>  
                 Your comment is awaiting approval
             <?php endif; ?>  
<?php if(function_exists('get_avatar')) { echo get_avatar($comment, '50'); } ?>
<?php comment_type('<strong>COMMENT</strong>', '<strong>TRACKBACK</strong>', ''); ?> from <strong><?php comment_author(); ?></strong> <?php edit_comment_link('(edit)'); ?> <a href="<?php get_permalink(); ?>#comment-<?php comment_ID(); ?>">(permalink)</a>

<?php 
	if($comment->comment_author_url != "") 
		{ ?>
			<?php comment_author_url_link('(url)', '', ''); ?>
		<?php } 
	else 
		{ ?>
			(url)
		<?php } 
?>

<br />

<?php comment_date('<b>Y</b>'); ?><br />
<?php comment_date('<b>M</b>'); ?><br />
<?php comment_date('<b>j</b>'); ?><br />
<?php comment_time('<b>H:i</b>'); ?>
<div class="comment_text_supemi"><?php comment_text(); ?></div>
         </li> 

             <?php endforeach; ?>

     </ol>  

<?php endif; ?> 

<?php if ( comments_open() ) : ?>

<div class="go_bold_supemi"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" /><label for="author">Name <?php if ($req) echo "(required)"; ?></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" /><label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label></p>

<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" /><label for="url">Website</label></p>

<?php endif; ?>

<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>

<p><textarea name="comment" id="comment" cols="10" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /><?php comment_id_fields(); ?></p>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>