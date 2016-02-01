<?php
?>
<div class="pitch-comment">
  <div class="pitch-comment-title"><h3><?php print render($title); ?></h3></div>
  <div class="pitch-comment-author"><p>Written by <?php print render($author); ?> on <?php print render($created); ?></div>
  <hr>
  <div class="pitch-comment-body"><?php print render($content['comment_body']); ?></div>
</div>