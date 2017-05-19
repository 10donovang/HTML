<!DOCTYPE html>
<html>
<body>

<?php
$total = 0;
echo "<h1>Shopping Finalization</h1>";
echo "Name: ", $_POST['name'], "<br>";
echo "Shipping Address: ", $_POST['saddress'], " ", $_POST['city'], " ", 
$_POST['state'], " ", $_POST['zip'], "<br>";
echo "Phone number: ", $_POST['phone'], "<br><br>";
echo "Books Ordered: <br>";
if (isset($_POST['book1'])){
echo "The Best Magic Tricks of All Times by Donald McGregor $4.95 <br>";
$total = $total + 4.95;}
if (isset($_POST['book2'])){
echo "Math Tricks for All Times by Donald McGregor $20.00<br>";
$total = $total + 20;}
if (isset($_POST['book3'])){
echo "The Deft Book of Magic by Donald McGregor $25.95<br>";
$total = $total + 25.95;}
if (isset($_POST['book4'])){
echo "Magic Book of Math Tricks by Donald McGregory $15.95<br>";
$total = $total + 15.95;}
echo "Total Price: $", $total, "<br><br>";
echo $_POST['cardtype'], " ", $_POST['CCN'], " ", $_POST['date'];
echo '<form action="confirmation.php" id="form1" method="post">'; 
echo '<input type="submit" name="submit" value="Submit">';
echo '<input type="submit" name="cancel" value="Cancel">';
echo '</form>'
?>

</body>
</html>
