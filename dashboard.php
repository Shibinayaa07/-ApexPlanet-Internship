<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
include 'includes_header.php';
?>
<h2>Welcome, <?= $_SESSION['username'] ?>!</h2>
<a href="create_post.php" class="btn btn-success">Create New Post</a>
<?php include 'includes_footer.php'; ?>