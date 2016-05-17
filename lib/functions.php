<?php

function all_posts() {
  $json = file_get_contents("data/posts.json");
  $data = json_decode($json, true);
  return $data;
}
function sort_date() {
  $data = all_posts();
  usort($data, function($a, $b) {
    return $a['post_date'] - $b['post_date'];
  });
  return $data;
}

 ?>
