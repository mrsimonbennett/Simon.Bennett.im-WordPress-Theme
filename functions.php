<?php
function DisplayPingTrackbacks() {
 
    // Do not do anything if Disqus is not installed
    if(!dsq_is_installed()) return;
 
    $current_post_ID = get_the_ID();
 
    global $wpdb;
 
    $sql =  "SELECT comment_author_url, comment_date, comment_content, comment_author FROM $wpdb->comments WHERE comment_post_ID = $current_post_ID AND comment_approved = '1' AND (comment_type = 'pingback' OR comment_type = 'trackback') ORDER BY comment_date ASC";
 
    if ($post_pingtrackbacks = $wpdb->get_results($sql) ) {
 
        $number_of_pingtrackbacks = count($post_pingtrackbacks);
 
        if ($number_of_pingtrackbacks == 1) {
            echo "<div id='pingtrackback'><h3 style='font-size:16px;margin-bottom:10px'>One Pingback/Trackback</h3><ul>";
        } else {
            echo "<div id='pingtrackback'><h3 style='font-size:16px;margin-bottom:10px'>" . $number_of_pingtrackbacks . " Pingbacks/Trackbacks</h3><ul>";
        }
 
        foreach ($post_pingtrackbacks as $post_pingtrackback) {
         
                        echo "<strong>";
                        echo date( 'd F Y \a\t g:ma', strtotime( $post_pingtrackback->comment_date ));
                        echo "</strong><br />";
            $comment_summary = $post_pingtrackback->comment_content;
            echo substr( $comment_summary, 0, strrpos( substr( $comment_summary, 0, 90), ' ' ) ) . ' ...';
 
                        echo "\n<li><a href='";
            echo $post_pingtrackback->comment_author_url;
            echo "'>";
            $author = $post_pingtrackback->comment_author;
            echo html_entity_decode($author);
            echo "</a>";
            echo "</li>";
        }
        echo "</ul></div>";
        }
}


?>