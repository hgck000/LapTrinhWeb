<?php
$comment= filter_input(INPUT_POST, 'comment');
$comment = nl2br($comment, false);
?>
<p><?php echo $comment; ?></p>