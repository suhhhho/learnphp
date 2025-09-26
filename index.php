<?php
$posts = [
  ['title' => 'World news 1', 'published' => '26.09.25', 'author' => 'Sofja', 'body' => 'Some world news 1'],
  ['title' => 'World news 2', 'published' => '25.09.25', 'author' => 'Portnova', 'body' => 'Some world news 2'],
  ['title' => 'World news 3', 'published' => '24.09.25', 'author' => 'Pets', 'body' => 'Some world news 3'],
  ['title' => 'World news 4', 'published' => '23.09.25', 'author' => 'Manivald', 'body' => 'Some world news 4'],
];
?>
<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container">
    <?php include __DIR__ . '/partials/hero.php'; ?>
    <?php include __DIR__ . '/partials/featured.php'; ?>
   
    <div class="row g-5">
      <div class="col-md-8">
        <?php include __DIR__ . '/partials/posts.php'; ?>
      </div>
      <div class="col-md-4">
        <?php include __DIR__ . '/partials/sidebar.php'; ?>
      </div>
    </div>
  </main>
<?php include __DIR__ . '/partials/footer.php'; ?>