<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">

     <!--Custom Styling-->
     <link rel="stylesheet" href="../../assets/css/admin.css">

    

    <title>Admin Section - Edit Topic</title>
</head>
<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin Page Wrapper-->
<div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


    <!--Admin content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Topic</a>
            <a href="index.php" class="btn btn-big">Manage Topics</a>
        </div>

<div class="content">
    <h2 class="page-title">Edit Topic</h2>
    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

    <form action ="Edit.php" method="post">
    <input type = "hidden" name = "id" value ="<?php echo $id; ?>" >
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" id="body"><?php echo $description; ?></textarea>
        </div>
        
        <div>
            <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
        </div>
    </form>
 </div>
    </div>
</div>
 <!-- //page wrapper-->   

 

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Ck Editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<!--Custom Script-->
<script src="../../assets/js/scripts.js"></script>
</body>
</html>