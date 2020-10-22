<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
?>
<!DOCTYPE html >
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale-1.0">
<meta http-equiv="X-UA-compatible" content="ie=edge">

<!-- Font awsome -->
<script src="https://kit.fontawesome.com/5052d0b929.js" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

<!-- custome styling -->
<link rel="stylesheet" href="../../assets/css/style.css">
<!-- Admin styling -->
<link rel="stylesheet" href="../../assets/css/admin.css">
<title>ADMIN SECTION == Manage topic</title>
</head>

<body>
<!-- Admin Header here-->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
<!-- Admin Page Wraper -->
<div class="admin-wrapper">
<!-- left sidebar -->
<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<!-- End left sidebar -->
<!-- Admin Content -->
<div class="admin-content">
<div class="button-group">
	<a href="create.php" class="btn btn-big">Add Topics</a>
	<a href="index.php" class="btn btn-big">Manage posts</a>
	</div>
<div class="content">
<h2 class="page-title">Manage Topics</h2>
<?php include(ROOT_PATH . "/app/includes/messages.php");?>

<table><thead>
	<th>SN</th>
	<th>Name</th>
	<th colspan="2">Action</th>
</thead>
<tbody>
<?php foreach ($topics as $key => $topic): ?>
<tr>
<td><?php echo $key +1; ?></td>
<td><?php echo $topic['name']; ?></td>
<td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
<td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>

</tr>
<?php endforeach; ?>

</tbody>
</table>

</div>



</div>
<!-- Admin Content -->

</div>

<!-- End Page Wraper -->





<!-- JQuery --> <!-- From JQuery website free-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script><!-- ckeditor text editor must b after jquery and before js file -->

<!-- Custom scripts -->
<script src="../../assets/js/scripts.js"></script>
</body>

</html>
