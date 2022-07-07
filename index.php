<?php
include 'config.php';

error_reporting(0);
session_start();

if(isset($_POST['login_button'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check_user_pass = "SELECT * FROM `accounts` WHERE username = '$username' AND userpass = '$password' LIMIT 1";
    $check_user_pass_now = mysqli_query($connect,$check_user_pass);
    if(mysqli_num_rows($check_user_pass_now) > 0){
        $result_row = mysqli_fetch_assoc($check_user_pass_now);
        $_SESSION['username'] = $result_row['username'];
        header("Location: biography.php");
    }
    else{
        echo "<script>alert('Wrong login credentials!')</script>";
    }
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    $new_cpassword = $_POST['new_cpassword'];

    if($new_password == $new_cpassword)
    {
        $check_repeat_user = "SELECT username FROM accounts WHERE username = '$username'";
        $check_repeat_user_now = mysqli_query($connect,$check_repeat_user);
        if(mysqli_num_rows($check_repeat_user_now) > 0)
        {
            echo "<script>alert('$username is already exists!')</script>";
        }
        else
        {
            $insert_items = "INSERT INTO accounts (username, userpass)
            VALUES ('$username','$new_password')";
            $insert_items_now = mysqli_query($connect,$insert_items);
            if(!$insert_items){
            echo "<script>alert('Something went wrong!')</script>";
        }
        else
        {
            echo "<script>alert('Successfully Registered!')</script>";
            $username = '';
            $new_password = '';
            $new_cpassword = '';
        }
        }
    }else
    {
        echo "<script>alert('Password NOT Match!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/account.css">
    <title>Document</title>
</head>
<body>

<div class="generator_container">
    <div class="loading_screen_container">
        <div class="loading_screen_relative">
        <div class="loading_screen_circle"></div>
        </div>
    </div>
    <div class="account_handler_container">
        <h1 class="template_title">Biography Generator</h1>
        <div class="default_data">
            <a href="default.php/" class="new_shape">Continue with default Biography</a>
            <p class="link new_shape create_bio">Create your own Biography Template</p>
            <p class="link signin">Already have your own Biography?</p>
        </div>
        <div class="login_handler">
            

            <form action="" method="post" class="login_page">
                <div class="close_button_holder">
                    <div class="close_signin_button">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </div>
                </div>
                <div class="login_container">
                    <div class="credential_container">
                        <div class="login_title">
                            <h1 class="login_header">Login</h1>
                        </div>
                        <div class="username_container">
                            <ion-icon name="person-circle-outline" class="user_icon"></ion-icon>
                            <input type="text" name="username" id="login_username" required placeholder="Username" minlength="6" maxlength="25" value="<?php echo $username; ?>">
                            <ion-icon name="close-outline" class="delete_icon user_delete_icon" ></ion-icon>
                          
                        </div>
                        <div class="password_container">
                            <ion-icon name="key-outline" class="password_icon"></ion-icon>
                            <input type="password" name="password" id="login_password" class="show_login_password" required placeholder="Password" minlength="8" maxlength="25" value="<?php echo $password; ?>">
                            <ion-icon name="close-outline" class="delete_icon pass_delete_icon"></ion-icon>
                           
                        </div>
                        <div class="show_password">
                            <label class="checked_checkbox">
                                <input type="checkbox" name="show_pass" id="show_pass" class="check">
                                <div class="new_checkbox">
                                    <div class="new_checkbox2"></div>
                                </div>
                                <p>Show Password</p>
                            </label>

                        </div>
                        <div class="submit_container">
                            <button name="login_button" class="login_submit_button">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <form action="" method="POST" class="forms">
        <div class="signin_holder">

        </div>
        <div class="close_button_holder">
            <div class="close_button">
                <ion-icon name="close-circle-outline"></ion-icon>
            </div>
        </div>
        <h1 class="biography_title">Biography Generator</h1>
        <div class="form_items">
            <div class="items">
                <span>Username</span>
                <input type="text" name="username" id="username" value="<?php echo $username ?>" required minlength="6" maxlength="25" required>
            </div>
            <div class="items">
                <span>Password</span>
                <input type="password" name="new_password" id="new_password" value="<?php echo $new_password ?>" required minlength="6" maxlength="25" required>
            </div>
            <div class="items">
                <span>Retype Password</span>
                <input type="password" name="new_cpassword" id="new_cpassword" value="<?php echo $new_cpassword ?>" required minlength="6" maxlength="25" required>
            </div>
            <div class="items">
                <span>Fullname</span>
                <input type="text" name="fullname" id="fullname">
            </div>
            <div class="items">
                <span>First Title</span>
                <input type="text" name="title1" id="title1"  placeholder="let SPACE = nbsp;" >
            </div>
            <div class="items">
                <span>Second Title</span>
                <input type="text" name="title2" id="title2"  placeholder="let SPACE = nbsp;" >
            </div>
            <div class="items">
                <span>Short Message</span>
                <textarea cols="50" rows="10" name="short_message" id="short_message" ></textarea>
            </div>
            <div class="items">
                <span>Right Title</span>
                <input type="text" name="right_title" id="right_title" >
            </div>
            <div class="items">
                <span>Long message</span>
                <textarea cols="50" rows="10" name="long_message" id="long_message" ></textarea>
            </div>
            <div class="items"><span>Birthdate</span><input type="text" name="birthdate" id="birthdate" ></div>
            <div class="items"><span>Age</span><input type="text" name="age" id="age" ></div>
            <div class="items"><span>Country</span><input type="text" name="country" id="country" ></div>
            <div class="items"><span>Address</span><input type="text" name="address" id="address" ></div>
            <div class="items"><span>Email</span><input type="text" name="email" id="email" ></div>
            <div class="items"><span>Number</span><input type="text" name="number" id="number" ></div>
            <div class="items"><span>Status</span><input type="text" name="status" id="status" ></div>
            <div class="items"><span>Gender</span><input type="text" name="gender" id="gender" ></div>
            <div class="items"><span>Bottom Content</span><input type="text" name="bottom_content" id="bottom_content" ></div>
            <div class="items">
                <button name="submit" class="create_submit_button">Submit</button>
            </div>
        </div>
    </form>
</div>


<script>
    //show login page
    const signin = document.querySelector('.signin')
    signin.addEventListener('click', ()=>{
        const login_page = document.querySelector('.login_page')
        login_page.classList.add('active')
    })
    //hide login page
    const close_signin_button = document.querySelector('.close_signin_button')
    close_signin_button.addEventListener('click', ()=>{
        const login_page = document.querySelector('.login_page')
        login_page.classList.remove('active')
    })

    

    //Open Create Biography
    const create_bio = document.querySelector('.create_bio')
    create_bio.addEventListener('click', ()=>{
        const form = document.querySelector('.forms')
        const account_handler_container = document.querySelector('.account_handler_container')
        form.classList.add('active')
        account_handler_container.classList.add('active')
    })
    //Close Create Biography with Loading Screen
    const close_button = document.querySelector('.close_button')
    close_button.addEventListener('click',()=>{
        const form = document.querySelector('.forms')
        const account_handler_container = document.querySelector('.account_handler_container')
        account_handler_container.classList.remove('active')
        form.classList.remove('active')
        
        const loading_screen_container = document.querySelector('.loading_screen_container')
        loading_screen_container.style.display="block"
        setTimeout(()=>{
    loading_screen_container.style.display="none"
},250)
    })
    //Title1 and Title2 auto &nbsp; every space detected
    const title1 = document.querySelector('#title1')
    const title2 = document.querySelector('#title2')
    title1.addEventListener('keyup', event => {
        if (event.code === 'Space') {
            title1.value = title1.value.replace(/\s+/g,'&nbsp;')
    }
    title2.addEventListener('keyup', event => {
        if (event.code === 'Space') {
            title2.value = title2.value.replace(/\s+/g,'&nbsp;')
        }
    })

})

//Loading screen timeout
const loading_screen_container = document.querySelector('.loading_screen_container')
setTimeout(()=>{
    loading_screen_container.style.display="none"
},300)

//Show erase login credentials input
    const login_username = document.getElementById('login_username')
    const login_password = document.getElementById('login_password')
    const user_delete_icon = document.querySelector('.user_delete_icon')
    const pass_delete_icon = document.querySelector('.pass_delete_icon')
    //LOGIN USERNAME
    login_username.addEventListener('input',()=>{
        if(login_username.value.length > 0){
            user_delete_icon.classList.add('active')
        }
        else if(login_username.value === ''){
            user_delete_icon.classList.remove('active')
        }
        user_delete_icon.addEventListener('click',()=>{
            login_username.value = ''
            user_delete_icon.classList.remove('active')
        })
    })
    //LOGIN PASSWORD
    login_password.addEventListener('input',()=>{
        if(login_password.value.length > 0){
            pass_delete_icon.classList.add('active')
        }
        else if(login_password.value === ''){
            pass_delete_icon.classList.remove('active')
        }
        pass_delete_icon.addEventListener('click',()=>{
            login_password.value = ''
            pass_delete_icon.classList.remove('active')
        })
    })
    //SHOW PASSWORD
    const checked_checkbox = document.querySelector('.new_checkbox')
    const show_login_password = document.querySelector('.show_login_password')
    const checked = document.querySelector('.check')
    checked_checkbox.addEventListener('click', ()=>{
        checked.classList.contains('active')?checked.classList.remove('active'):checked.classList.add('active')
        checked.classList.contains('active')?show_login_password.removeAttribute('type'):show_login_password.setAttribute('type','password')
        
    })

</script>
</body>
</html>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
