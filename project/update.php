<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM item WHERE item_id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <legend>Update item</legend>
        <form action="actions/a_update.php" method="POST">
            <table>
                <select name="type">
                    <option <?php if ($data['type'] == 'book')echo "selected='selected'";?> value="book">book</option>
                    <option <?php if ($data['type'] == 'CD')echo "selected='selected'";?> value="CD">CD</option>
                    <option <?php if ($data['type'] == 'DVD')echo "selected='selected'";?> value="DVD">DVD</option>
                </select>
                <label class="pl-3">Item type</label>
                <br>
                <select name="size">
                    <option <?php if ($data['publisher_size'] == 'small')echo "selected='selected'";?> value="small">small</option>
                    <option <?php if ($data['publisher_size'] == 'medium')echo "selected='selected'";?>value="medium">medium</option>
                    <option <?php if ($data['publisher_size'] == 'big')echo "selected='selected'";?>value="big">big</option>
                </select>
                <label class="pl-3">Publisher Size</label>
                <br>
                <select name="status">
                    <option <?php if ($data['status'] == 'available')echo "selected='selected'";?>value="available">available</option>
                    <option <?php if ($data['status'] == 'reserved')echo "selected='selected'";?>value="reserved">reserved</option>
                </select>
                <label class="pl-3">Status of item</label>
                <tr>
                    <th>Title</th>
                    <td><input type="text" value="<?php echo $data['title']?>" name="title" placeholder="title" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input type="text" value="<?php echo $data['item_ISBN']?>" name="isbn" placeholder="ISBN (numbers only)" /></td>
                </tr>
                <tr>
                    <th>image URL</th>
                    <td><input type="text" value="<?php echo $data['image']?>" name="image" placeholder="image URL" /></td>
                </tr>
                <tr>
                    <th>Author name</th>
                    <td><input type="text" value="<?php echo $data['author_name']?>" name="author-name" placeholder="Author name" /></td>
                </tr>
                <tr>
                    <th>Author last name</th>
                    <td><input type="text" value="<?php echo $data['author_lastname']?>" name="author-lastname" placeholder="Author last name" /></td>
                </tr>
                <tr>
                    <th>Short description</th>
                    <td><input type="text" value="<?php echo $data['description']?>" name="short-description" placeholder="description" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input type="text" value="<?php echo $data['publisher_name']?>" name="publisher-name" placeholder="Publisher name" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input type="text" value="<?php echo $data['publisher_address']?>" name="publisher-address" placeholder="Publisher Address" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['item_id']?>" />
                    <td><button class="btn btn-primary"type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-primary"type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>

<?php
}
?>