<?php
$conn = mysqli_connect("localhost","root","");
$sql_result=mysqli_query($conn,"select * from `ecom`.`product`where `product`.`owner`=$_SESSION[userid] ");

while($dbrow=mysqli_fetch_assoc($sql_result)){
    echo "
        <div class='vb' >
<div class='vi'><img style='border: 5px solid white;width: fit-content;width:90%;height: 150px;' src='$dbrow[imgpath]'></div>
<div class='vt'> <h3>$dbrow[title] </h3></div>
<div class='vc'> <h6>$dbrow[category] </h6></div>
<div class='vp'> <h3>$dbrow[price]</h3></div>
            <div class='vd'> <h5>$dbrow[des] </h5></div>
            <div class='vd'><a href='edit.php'><button>Edit</button></a></div>
            <div class='vd'><a href='./delete.php?pid=$dbrow[pid]'><button onclick='deletePdt($dbrow[pid])' >Delete</button></a></div>

        </div>
         ";
}

$conn->close();
?>

<script>

function deletePdt(pid){
        res = confirm("Are you sure want to Delete?")
        if(res){
            window.location.href=`delete.php?pid=${pid}`;
        }
    }

</script>