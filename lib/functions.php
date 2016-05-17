<?php

function all_posts() {
  $json = file_get_contents("data/posts.json");
  $data = json_decode($json, true);
  return ($data);
}

 ?>
