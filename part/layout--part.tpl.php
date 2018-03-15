
<div class="wrapper clearfix">
<?php if (!empty($content['top'])): ?>
        <nav class="top">
          <?php print $content['top']; ?>
        </nav>
      <?php endif; ?>
      <div class="menu-icon">
  <span class="menu-icon-item"></span>
    <span class="menu-icon-item"></span>
      <span class="menu-icon-item"></span>
  </div>
<div class="layout">
  <?php if ($content['header']): ?>
    <header class="header">
        <?php print $content['header']; ?>
     </header>
  <?php endif; ?>
  <div class="wrap clearfix">
      <?php if ($messages): ?>
        <div class="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div class="content clearfix">
      <div class="page-title">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>
     <?php if ($tabs): ?>
        <nav class="tabs"">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>
      <?php print $action_links; ?>
      
       
        <?php print $content['content']; ?>
      </div>

      <?php if (!empty($content['bottom'])): ?>
        <div class="bottom">
          <?php print $content['bottom']; ?>
        </div>
      <?php endif; ?>
  </div>
<?php if ($content['footer']): ?>
    <footer class="footer"  role="footer">
        <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>
</div>
</div>