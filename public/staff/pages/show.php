<?php require_once('../../../private/initialize.php');?>

<?php 

$id = $_GET['id'] ?? '1';

?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id='content'>
    <a href="./index.php">&laquo; Go Back</a>
    <p>PAGE ID: <?php echo h($id); ?></p>
</div>


<?php include(SHARED_PATH . '/staff_footer.php');?>