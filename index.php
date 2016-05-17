<?php include ('templates/header.php'); ?>
<?php include ('templates/sidebar.php'); ?>

<div class="home">
  <?php require('lib/functions.php');
        all_posts('data/posts.json');

        $posts = all_posts();

        foreach ($posts as $post) {
          echo "<h2 class=\"container title\">{$post['title']}</h2>";

          $new_date = date("F j, Y" , $post['post_date']);
          echo "<p class=\"container date\">$new_date</p>";

          echo "<p class=\"container author\">{$post['author']}</p>";
          echo "<p class=\"container content\">{$post['content']}</p>";
          echo "<p class=\"bold\">Categorized in: </p><p class=\"container category\">" . implode(", " , $post['category']) . "</p><hr/>";
        }
        ?>
</div>

<?php include ('templates/footer.php'); ?>
