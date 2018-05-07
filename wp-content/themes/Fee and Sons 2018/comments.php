<div id="comments">
	<!-- Prevents loading the file directly -->
	<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
	    <?php die('Please do not load this page directly. Thanks and have a great day!'); ?>
	<?php endif; ?>
	
	<!-- Password Required -->
	<?php if(!empty($post->post_password)) : ?>
	    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	    <?php endif; ?>
	<?php endif; ?>
	
	<?php $i++; ?> <!-- Variable for alternating comment styles -->
	<?php if($comments) : ?>
		<h3><?php comments_number('No comments', 'One comment', '% comments'); ?></h3>
	    <?php wp_list_comments( $args, $comments ); ?>
	    <?php if ($trackback == true) { ?><!-- Checks for comment type: trackback -->
	    <h3>Trackbacks</h3>
		    <ol>
		    	<!-- outputs trackbacks -->
			    <?php foreach ($comments as $comment) : ?>
				    <?php $comment_type = get_comment_type(); ?>
				    <?php if($comment_type != 'comment') { ?>
					    <li><?php comment_author_link() ?></li>
				    <?php } ?>
			    <?php endforeach; ?>
		    </ol>
	    <?php } ?>
	<?php else : ?>
	    <p>No comments yet. You should be the first!</p>
	<?php endif; ?>
	
	<div id="comments-form">
		<?php comment_form(); ?>
	</div><!--#commentsForm-->
	<?php paginate_comments_links(); ?>
</div><!--#comments-->