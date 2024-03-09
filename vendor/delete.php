

<?php
if(isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    
    include "../shared/connection.php";

    $stmt = $conn->prepare("DELETE FROM product WHERE pid = ?");
    $stmt->bind_param("i", $pid);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        header("Location: home.php");
        exit;
    } else {
        echo "Failed to delete product.";
        echo $conn->error;

    }


    $stmt->close();
    $conn->close();
} else {
    header("Location: error.php");
    exit;
}




// session_start();

// $conn=mysqli_connect("localhost","root","","ecom");
// echo "$_SESSION[pid]";

// $status=mysqli_query($conn,"delete from product where pid =`$_SESSION[pid]`");
// if ($status) {
    // if ($status) {
    //     echo "product added successfully";
    // } else {
    //     echo "Product couldn't be added<br>";
    //     echo mysqli_error($conn);
    // }
    // Perform actions based on $param1 and $param2
    // Send a response back to the JavaScript code
    //     echo "success";
    //     header("location:home.php");
    // } else {
        //     echo "Invalid request method";
        // }
        
    ?>