<?php decorate_with('layout_thewhohome'); ?>

<?php slot('browseby_thewho'); ?>
  <?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID); ?>
  <?php if ($browseMenu->hasChildren()) { ?>
    <section id="browse_by_homepage">
      <b><?php echo __('Browse by'); ?>:</b>
      <?php $links = []; ?>
      <?php foreach ($browseMenu->getChildren() as $item) { ?>
        <?php $links[] = link_to(esc_specialchars($item->getLabel(['cultureFallback' => true])), $item->getPath(['getUrl' => true, 'resolveAlias' => true])); ?>
      <?php } ?>
      <?php echo implode('&nbsp;|&nbsp;', $links); ?>
    </section>
  <?php } ?>
<?php end_slot(); ?>

<?php slot('title'); ?>
  <h1><?php echo render_title($resource->getTitle(['cultureFallback' => true])); ?></h1>
<?php end_slot(); ?>

<div class="page">
  <?php echo render_value_html($sf_data->getRaw('content')); ?>
</div>

<?php if (QubitAcl::check($resource, 'update')) { ?>
  <?php slot('after-content'); ?>
    <section class="actions mb-3">
      <?php echo link_to(__('Edit'), [$resource, 'module' => 'staticpage', 'action' => 'edit'], ['class' => 'btn atom-btn-outline-light']); ?>
    </section>
  <?php end_slot(); ?>
<?php } ?>
