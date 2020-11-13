<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add User</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <legend>Add media to the database</legend>

        <form action="actions/a_create.php" method= "POST">
            <table>
                    <select name="type">
                        <option value="book">book</option>
                        <option value="CD">CD</option>
                        <option value="DVD">DVD</option>
                    </select>
                <label class="pl-3">Item type</label>
                <br>
                    <select name="size">
                        <option value="small">small</option>
                        <option value="medium">medium</option>
                        <option value="big">big</option>
                    </select>
                <label class="pl-3">Publisher Size</label>
                <tr>
                    <th>Title</th >
                    <td><input  type="text" name="title"  placeholder="title" /></td >
                </tr>    
                <tr>
                    <th>ISBN</th>
                    <td><input type="text"  name="isbn" placeholder ="ISBN (numbers only)" /></td>
                </tr>
                <tr>
                    <th>image URL</th>
                    <td><input  type="text" name= "image" placeholder="image URL" /></td>
                </tr>
                <tr>
                    <th>Author name</th>
                    <td><input type="text"  name="author-name" placeholder ="Author name" /></td>
                </tr>
                <tr>
                    <th>Author last name</th>
                    <td><input type="text"  name="author-lastname" placeholder ="Author last name" /></td>
                </tr>
                <tr>
                    <th>Short description</th>
                    <td><input type="text"  name="short-description" placeholder ="description" /></td>
                </tr>
                <tr>
                    <th>Date of publication</th>
                    <td><input type="text"  name="publish-date" placeholder ="yyyy-mm-dd" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input type="text"  name="publisher-name" placeholder ="Publisher name" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input type="text"  name="publisher-address" placeholder ="Publisher Address" /></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type ="submit">Insert item</button></td>
                    <td><a href="index.php"><button class="btn btn-primary" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>