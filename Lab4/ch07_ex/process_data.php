<!-- dùng GET sẽ hiển thị thông tin đăng nhập được gọi lên trên url -->
<!-- <?php
$user_name = filter_input(INPUT_GET, 'user_name');
$password = filter_input(INPUT_GET, 'password');
$action = filter_input(INPUT_GET, 'action')
?> -->
<!-- dùng POST sẽ giúp chúng ta bảo mật thông tin đăng nhập  -->
<?php
$user_name = filter_input(INPUT_POST, 'user_name');
$password = filter_input(INPUT_POST, 'password');
$action = filter_input(INPUT_POST, 'action')
?>
<form action="your_script.php" method="get">
    <label>User Name:</label>
    <input type="text" name="user_name" value="nana"><br>

    <label>Password:</label>
    <input type="password" name="password"><br>

    <input type="hidden" name="action" value="login">
    <input type="submit" value="Login">
</form>
