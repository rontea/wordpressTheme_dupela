<?php 
if ( ! function_exists( 'dupela_comment' ) ) :
    
endif;  

function comment_form_set_field(){
  
/* get comment */
    $fields =  array(

    'author' =>
      '<p><label for="author"> ' . __( 'Name', 'domainreference' ) . '<span class="required"> *</span></label> ' .
      ( $req ? '' : '' ) .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" ' . $aria_req . ' /></p>',

    'email' =>
      '<p><label for="email">' . __( 'Email', 'domainreference' ) . '<span class="required"> *</span></label> ' .
      ( $req ? '' : '' ) .
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'url' =>
      '<p><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>',
  );
    
    return $fields;
  
}

function comment_form_set_args(){
    
    $fields = comment_form_set_field();
    
  $args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'submit',
        'class_submit'      => 'global-inputs',
        'name_submit'       => 'submit',
        'title_reply'       => __( 'Leave a Comment' ),
        'title_reply_to'    => __( 'Leave a Reply to %s' ),
        'cancel_reply_link' => __( 'Cancel Reply' ),
        'label_submit'      => __( 'Post Comment' ),
        'format'            => 'xhtml',

        'comment_field' =>  ' <div class="comment-box"><label for="comment">' . _x( 'Comment', 'noun' ) .
          '</label><textarea id="comment" name="comment" cols="50" rows="10">' .
          '</textarea></div>',

        'must_log_in' => '<p class="must-log-in">' .
          sprintf(
            __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
            wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
          ) . '</p>',

        'logged_in_as' => '<p class="logged-in-as">' .
          sprintf(
          __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
            admin_url( 'profile.php' ),
            $user_identity,
            wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
          ) . '</p>',

        'comment_notes_before' => ' <div class="comment-notes">' .
          __( 'Your email address will not be published. Required fields are marked *' ) . ( $req ? $required_text : '' ) .
          '</div>',

        'comment_notes_after' => '' .
          sprintf(
            __( '<code> You may use these HTML tags and attributes:&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code> ' ),
            ' <code>' . allowed_tags() . '</code>'
          ) . '',

        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
          );
  
  return $args;
    
}

?>
