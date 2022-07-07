
<?php
session_start();
include 'config.php';
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}
$session_user = $_SESSION['username'];
$check_username = "SELECT id FROM accounts WHERE username = '$session_user' LIMIT 1";
$check_username_now = mysqli_query($connect,$check_username);

$get_id_number = mysqli_fetch_all($check_username_now, MYSQLI_BOTH);

$final_id_number = $get_id_number[0][0];




$title = "Elyric's Biography Database elements";
$link_responsive = "assets/css/responsive.css";
$link_style = "assets/css/style.css";

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php';?>
<?php



$connection = mysqli_connect('localhost','root','','elyricmanatad');
$items = "SELECT * FROM `biography_database` WHERE id = $final_id_number";


$result = mysqli_query($connection, $items);

$data = mysqli_fetch_all($result, MYSQLI_BOTH);

$fullname = $data[0][1];
$title1 = $data[0][2];
$title2 = $data[0][3];
$short_message = $data[0][4];
$right_panel_title = $data[0][5];
$right_panel_biography = $data[0][6];

$information = array(
    array("Birthdate" , $data[0][7]),
    array("Age" , $data[0][8]),
    array("Country" , $data[0][9]),
    array("Address" , $data[0][10]),
    array("Email" , $data[0][11]),
    array("Number" ,$data[0][12]),
    array("Single?" , $data[0][13]),
    array("Gender" , $data[0][14])
);

$footer_text = $data[0][15];
?>

<body>
    <div class="container">
        <?php include 'includes/header.php';?>

        <?php include 'includes/main.php';?>

        <?php include 'includes/footer.php';?>
    </div>
    <?php include 'includes/script.php'; ?>
</body>

</html>