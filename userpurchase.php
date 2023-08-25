<?php
ob_start();
session_start();
require 'connectdb.php';

if (isset($_GET['book_id'])){
    $bookid = $_GET['book_id'];?>


<!DOCTYPE html>
<html>
<head>
    <title>TRD NUMBER</title>
</head>
<body>

<h1>Purchase Form</h1>

<form action="purchasedone.php" method="POST">
    <label for="item">TRD NUMBER</label>
    <input type="text" id="item" name="trdnumber" required><br><br>

    <button type="submit" name="purchase" value="5" class="btn alazea-btn ml-15">
                   submit
            </button>
</form>

</body>
</html>


<?php
}

?>