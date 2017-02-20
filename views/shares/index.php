<div>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
      <a class="btn btn-success" id="btn-share" href="<?php echo ROOT_PATH; ?>shareboard/shares/add">Share Something</a>
  <?php endif; ?>
  <?php foreach ($viewmodel as $item) : ?>
    <div class="well">
      <h3><?php echo $item['title']; ?> by <span style="text-decoration: underline"><?php echo $item['user_id'] ?></span></h3>
      <small><?php echo $item['create_date']; ?></small>
      <hr/>
      <p class="id"><?php echo $item['body']; ?></p>
      <br/>
      <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to website</a>
    </div>
  <?php endforeach; ?>
</div>