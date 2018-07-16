<div class="comments">
	<h2>Comments</h2>
	<?php $args = array(

		'walker'	=> null,
		'max_depth'	=> '',
		'style'		=> 'ul',
		'callback'	=> null,
		'end-callback'	=> null,
		'type'		=> 'all',
		'reply_text'	=> 'Reply',
		'page'		=> '',
		'per_page'	=> '',
		'avatar_size'	=> 80,
		'reverse_top_level'	=> null,
		'reverse_children'	=> '',
		'format'	=> 'html5', //or xhtml
		'short_ping'	=> false,
			'echo'		=> true	//boolean default		

		); ?>

		<?php
		wp_list_comments($args, $comments);
		
		$comments_args = array(
			// change the title of send button
			'label_submit'=>'Send',
			//chenge the title of the reply section
			'title_reply'=>'Write a Reply or Comment',
			//remove text or HTML to be displayed after
			'comment_notes_after'=>'',
			//redefine your own textarea
			'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',

		);

		comment_form($comments_args);
		?>
</div>