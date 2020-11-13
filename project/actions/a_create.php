<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php 

require_once 'db_connect.php';

if ($_POST) {
    $title = $_POST['title'];
    $img = $_POST['image'];
    $authorName = $_POST[ 'author-name'];
    $authorLastName = $_POST['author-lastname'];
    $description = $_POST['short-description'];
    $date = $_POST[ 'publish-date'];
    $publisher = $_POST['publisher-name'];
    $publisherAddress = $_POST['publisher-address'];
    $isbn = $_POST['isbn'];
    $type = $_POST['type'];
    $size = $_POST['size'];
   $sql = "INSERT INTO item (title, image, author_name, author_lastname, description, publish_date, status, publisher_name, publisher_address, item_ISBN, type, publisher_size) VALUES ('$title', '$img', '$authorName', '$authorLastName', 
   '$description', '$date', 'available', '$publisher', '$publisherAddress', '$isbn', '$type', '$size')";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully created new item</p>" ;
       echo "<a href='../create.php'><button class='btn btn-primary' type='button'>Back</button></a>";
        echo "<a href='../index.php'><button class='btn btn-primary ml-4' type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
</div>
</body>
</html>

