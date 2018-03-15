
<?php if($teaser): ?>
<article class="prev clearfix">
  <div class="prev-image">
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content['field_image_information']);
    ?>
  </div>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
    <h2 class="prev-title"><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
</article>
<?php endif; ?>



    <?php if(!$teaser): ?>
<article class="article clearfix">
 <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
 <div class="article-content">
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
  </div>
</article>
       <?php endif; ?>