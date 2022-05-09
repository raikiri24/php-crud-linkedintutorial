<?php require_once('../../../private/initialize.php');?>

<?php 

$id = $_GET['id'] ?? '1';

$page = find_page_by_id($id);
?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
  <h1>Pages: <?php echo h($page['menu_name']); ?></h1>

    <div class="attributes">
        <?php $subject = find_subject_by_id($page['subject_id']);?>
        <dl>
            <dt>Subject</dt>
            <dd><?php echo h($subject['menu_name']); ?></dd>
        </dl>
        <dl>
            <dt>Menu Name</dt>
            <dd><?php echo h($page['menu_name']); ?></dd>
        </dl>
        <dl>
            <dt>Position</dt>
            <dd><?php echo h($page['position']); ?></dd>
        </dl>
        <dl>
            <dt>Visible</dt>
            <dd><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></dd>
        </dl>
        <dl>
            <dt>Content</dt>
            <dd><?php echo $page['content'];?></dd>
        </dl>
    </div>

    </div>
  </div>

<?php include(SHARED_PATH . '/staff_footer.php');?>