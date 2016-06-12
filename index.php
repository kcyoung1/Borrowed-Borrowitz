<?php include ('templates/header.php');
      include ('templates/sidebar.php');
?>

<div class="home">
  <?php require('lib/functions.php');
        sort_date('data/posts.json');

        $posts = sort_date();

  foreach ($posts as $post) : ?>
    <h2 class="container title">
      <?php echo $post['title']; ?>
    </h2>
    <p class="container date">
      <?php echo date("F j, Y" , $post['post_date']); ?>
    </p>
    <p class="container author">
      by <?php   echo $post['author']; ?>
    </p>
    <p class="container content">
      <?php echo $post['content']; ?>
    </p>
    <p class="bold">Categorized in: </p><p class="container category">
      <?php echo implode(", " , $post['category']); ?>
    </p><hr/>
  <?php Endforeach; ?>

</div>

<?php include ('templates/footer.php'); ?>
