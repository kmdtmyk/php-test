<?php foreach ($news as $news_item): ?>

  <h3><?php echo $news_item['title']; ?></h3>
  <div class="main">
    <?php echo $news_item['body']; ?>
  </div>
  <p>
    <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">
      View article
    </a>
  </p>

<?php endforeach; ?>

<a href='/news/create'>
  create news
</a>
