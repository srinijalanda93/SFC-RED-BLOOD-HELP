<?php
include("connection.php");
?>
<?php
// Connect to database

include("connection.php");
// Fetch data from database
$id = $_GET['id'];
$sql = "SELECT donor.donar_fullname, donor.donar_age, donor.donar_mail, donor.donar_address, donor.donar_number, donor.donar_gender, blood.blood_group FROM donor JOIN blood ON donor.donar_blood = blood.blood_id WHERE donor.id = $id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    
    $sql = "UPDATE donor SET donar_fullname = '$fullname', donar_age = '$age', donar_mail = '$mail', donar_address = '$address', donar_number = '$number', donar_gender = '$gender' WHERE id = $id";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Successfully updated');</script>";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

// Display data in form
?>
<form method="POST">
    <label>Full Name:</label>
    <input type="text" name="fullname" value="<?php echo $row['donar_fullname']; ?>">
    
    <label>Age:</label>
    <input type="number" name="age" value="<?php echo $row['donar_age']; ?>">
    
    <label>Email:</label>
    <input type="email" name="mail" value="<?php echo $row['donar_mail']; ?>">
    
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['donar_address']; ?>">
    
    <label>Phone Number:</label>
    <input type="text" name="number" value="<?php echo $row['donar_number']; ?>">
    
    <label>Gender:</label>
    <input type="radio" name="gender" value="male" <?php echo ($row['donar_gender'] == 'male') ? 'checked' : ''; ?>> Male
    <input type="radio" name="gender" value="female" <?php echo ($row['donar_gender'] == 'female') ? 'checked' : ''; ?>> Female
    
    <label>Blood Group:</label>
    <select name="blood">
        <option value="1" <?php echo ($row['blood_group'] == 'A+') ? 'selected' : ''; ?>>A+</option>
        <option value="2" <?php echo ($row['blood_group'] == 'A-') ? 'selected' : ''; ?>>A-</option>
        <option value="3" <?php echo ($row['blood_group'] == 'B+') ?>