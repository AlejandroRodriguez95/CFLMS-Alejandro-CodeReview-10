<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR 10 Alejandro Rodriguez</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container">
        <div class="row">

            <?php
           $sql = "SELECT * FROM item";
           $result = $connect->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "
                <div id='".$row['item_id']."' class='card col-3 m-3'>
                    <img class='card-img-top' src='img/".$row['image']."' alt='Card image cap'>
                        <ul class='list-group list-group-flush'>
                        <li class='list-group-item-primary list-group-item'><b>Author: </b>".$row['author_name']." ".$row['author_lastname']."</li>
                        <li class='list-group-item'><b>Type: </b>".$row['type']."</li>
                    </ul>
                    <div class='card-body'>
                        <p class='card-text'><b>Description</b>: ".$row['description']."</p>
                    </div>
                    <div class='card-body'>
                        <a href='showMedia.php?id=" .$row['item_id']."'><button class='btn btn-primary' type='button'>Show Media</button></a><br><br>
                        <a href='update.php?id=" .$row['item_id']."'><button class='btn btn-primary' type='button'>Edit</button></a>
                        <a href='actions/a_delete.php?id=" .$row['item_id']."'><button class='btn btn-primary' type='button'>Delete</button></a>
                    </div>
                </div>";
           }} else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           echo "</div>";
           ?>
           <div class="row">
            <div class="col-5 mx-auto">
           <ul>
           <?php
           echo "<h3>List of publishers</h3>";
           $sql = "SELECT DISTINCT publisher_name FROM item ";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo  "<li><a href='publishers.php?publisher_name=" .$row['publisher_name']."'>".$row['publisher_name']."</a></li>";
       }} else  {
           echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
       }
            ?>
        </ul>
        </div>
        </div>
        <div class="row">
            <a class="col-2 mx-auto pb-3" href="create.php"><button type="button" class="btn btn-danger">Add Media</button></a>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>