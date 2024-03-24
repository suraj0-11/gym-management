<?php
$con = mysqli_connect("localhost", "root", "", "loginsystem");

if(isset($_POST['login_submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM logintb WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 1) {
        header("Location: admin-panel.php");
    } else {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php', '_self')</script>";
    }
}

if(isset($_POST['pat_submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $docapp = isset($_POST['docapp']) ? $_POST['docapp'] : ''; // Check if 'docapp' is set
    $query = "INSERT INTO doctorapp (fname, lname, email, contact, docapp) VALUES ('$fname', '$lname', '$email', '$contact', '$docapp')";
    $result = mysqli_query($con, $query);
    if($result) {
        echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
}

if(isset($_POST['tra_submit'])) {
    $Trainer_id = $_POST['Trainer_id'];
    $Name = $_POST['Name'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO Trainer (Trainer_id, Name, phone) VALUES ('$Trainer_id', '$Name', '$phone')";
    $result = mysqli_query($con, $query);
    if($result) {
        echo "<script>alert('Trainer added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
}

if(isset($_POST['pay_submit'])) {
    $Payment_id = $_POST['Payment_id'];
    $Amount = $_POST['Amount'];
    $customer_id = $_POST['customer_id'];
    $payment_type = $_POST['payment_type'];
    $customer_name = $_POST['customer_name'];
    $query = "INSERT INTO Payment (Payment_id, Amount, customer_id, payment_type, customer_name) VALUES ('$Payment_id', '$Amount', '$customer_id', '$payment_type', '$customer_name')";
    $result = mysqli_query($con, $query);
    if($result) {
        echo "<script>alert('Payment successful.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
}

function get_patient_details() {
    global $con;
    $query = "SELECT * FROM doctorapp";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $docapp = $row['docapp'];
        echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$docapp</td>
        </tr>";
    }
}

function get_package() {
    global $con;
    // Sample data for packages
    $packages = array(
        array("Package_id" => 1, "Package_name" => "Standard Package", "Amount" => 5000),
        array("Package_id" => 2, "Package_name" => "Premium Package", "Amount" => 10000),
        array("Package_id" => 3, "Package_name" => "Gold Package", "Amount" => 15000)
    );

    // Loop through each package and display its details
    foreach ($packages as $package) {
        $Package_id = $package['Package_id'];
        $Package_name = $package['Package_name'];
        $Amount = $package['Amount'];
        echo "<tr>
            <td>$Package_id</td>
            <td>$Package_name</td>
            <td>$Amount</td>
        </tr>";
    }
}


function get_trainer() {
    global $con;
    $query = "SELECT * FROM Trainer";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {
        $Trainer_id = $row['Trainer_id'];
        $Name = $row['Name'];
        $phone = $row['phone'];
        echo "<tr>
            <td>$Trainer_id</td>
            <td>$Name</td>
            <td>$phone</td>
        </tr>";
    }
}

function get_payment() {
    global $con;
    $query = "SELECT * FROM Payment";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {
        $Payment_id = $row['Payment_id'];
        $Amount = $row['Amount'];
        $payment_type = $row['payment_type'];
        $customer_id = $row['customer_id'];
        $customer_name = $row['customer_name'];
        echo "<tr>
            <td>$Payment_id</td>
            <td>$Amount</td>
            <td>$payment_type</td>
            <td>$customer_id</td>
            <td>$customer_name</td>
        </tr>";
    }
}
?>
