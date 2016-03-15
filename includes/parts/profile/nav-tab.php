<?php
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile.json');
$var078 = json_decode($this_page_words,TRUE);

echo <<<THIS
<div class="container"><ul class="nav nav-tabs">
  <li class="active"><a href="#">{$var078['profile']}</a></li>
  <li><a href="#">{$var078['posts']}</a></li>
  <li><a href="#">{$var078['about']}</a></li>
  <li><a href="#">{$var078['friends']}</a></li>
  <li><a href="#">{$var078['photos']}</a></li>
</ul>
</div><br/>
THIS
    ?>