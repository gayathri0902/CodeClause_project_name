<?php
include("database.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <style>
    body {
        background-image: url('gradient-mountain-landscape_23-2149159772.jpg');
        background-size: cover;  
        background-position: center;
        }
</style> -->

</head>
<body>
    <h1 class="top-heading">TODO LIST APPLICATION</h1>
    <div class="container">
        <form action="handleActions.php" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox" >
                <button type="submit" name="add" id="add">ADD</button>
            </div>
            <ul class="list">
                <?php 
                    $itemList=get_items();
                    while($row=$itemList->fetch_assoc()){

                    
                ?>
                <li class="item">
                    <p><?php echo $row["item"]; ?></p>
                    <div class="icon-container">
                        <button type="submit" name="checked" id="check" value="<?php echo $row["id"]; ?>"><i class="fa-sharp fa-solid fa-circle-check"></i></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash"></i></button>
                    </div>
                   
                    
                </li>
                <?php }?>


            </ul>
            
            <hr><br>
            <p>Completed Tasks:</p>
            <ul class="list">
                 <?php 
                    $itemList=get_items_checked();
                    while($row=$itemList->fetch_assoc()){

                    
                ?>
                <li class="item fade">
                    <p class="deleted-text"><span><?php echo $row["item"]; ?></span></p>
                    <div class="icon-container">
                        <button type="submit" name="checked" id="check" ><i class="fa-sharp fa-solid fa-circle-check hidden"></i></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash "></i></button>
                    </div>
                  
                </li>
                <?php }?>

            </ul>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/1225aa3716.js" crossorigin="anonymous"></script>
    
</body>
</html>
