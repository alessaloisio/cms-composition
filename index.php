<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php wp_head(); ?>
  

</head>
<body>
  <h1><?php echo get_bloginfo("name"); ?></h1>
  <p><?php echo get_bloginfo("description"); ?></p>


  <div class="lists">
    <?= var_dump(get_posts()); ?>
  </div>
</body>
</html>