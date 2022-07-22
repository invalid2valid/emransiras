<?php 
$conn = mysqli_connect('localhost','root','','dfrom');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Form</h1>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" required> <br>
            <input type="number" name="roll" placeholder="Roll" required> <br>
            <input type="submit" name="submit" value="submit">
            
        </form>
    </div>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
    extract($_POST);
    $date = date("Y/m/d");
    $query = "INSERT INTO `form`(`name`, `roll`, `date`) VALUES ('$name','$roll','$date')";
    
    mysqli_query($conn,$query);
}
?>