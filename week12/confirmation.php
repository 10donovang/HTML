<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['submit'])) {
        echo "Your order has been recieved.";
    } else {
        echo "Your order has been canceled.";
    }
}
?>

</body>
</html>
