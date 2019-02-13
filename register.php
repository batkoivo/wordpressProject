<?php
include 'include/common.php';
//ако потребитеят е влязал го пренасочва към index.php ако не е показва формата за регистрация
if (!isset($_SESSION['logged'])) {
    if ($_POST) {

        //нормализация на POST даните
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);
        $pass2 = trim($_POST['pass2']);
        $email = trim($_POST['email']);
        $usernicename = trim($_POST['user_nicename']);
        //валидация на POST даните
        if (mb_strlen($user) < 5) {
            $error_array['user'] = 'Това поле не може да съдържа по-малко от 5 символа';
        } else {
            if (!(!preg_match('/[^A-Za-z0-9]/', $user) && (ctype_alpha($user[0])))) {
                $error_array['user'] = 'Това поле трябва да започва с латинскa буквa и може да съдържа латински букви и цифри';
            }
        }
        if (mb_strlen($pass) < 5) {
            $error_array['pass'] = 'Това поле не може да съдържа по-малко от 5 символа';
        }
        if ($pass != $pass2) {
            $error_array['pass'] = 'Потвърждението на паролата не съвпада';
        }
        if (mb_strlen($email) < 5) {
            $error_array['email'] = 'Това поле не може да съдържа по-малко от 5 символа';
        } 
        if (mb_strlen($usernicename) < 3) {
            $error_array['user_nicename'] = 'Това поле не може да съдържа по-малко от 3 символа';
        } 
        else {
            if (!(!preg_match('/[^A-Za-z0-9]/', $user) && (ctype_alpha($user[0])))) {
                $error_array['user'] = 'Това поле трябва да започва с латинскa буквa и може да съдържа латински букви и цифри';
            }
            if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
                $error_array['email'] ='Грешно въведен е-майл адрес';               
            }

        }
        if (!isset($error_array)) {
            $user = mysqli_real_escape_string($db_init, $user);
            $pass = mysqli_real_escape_string($db_init, $pass);
            $pass = md5($pass);
            $sql = 'SELECT COUNT(user_login) as cnt FROM wp88users WHERE user_login="' . $user . '"';
            $res = mysqli_query($db_init, $sql);
            $row = $res->fetch_assoc();
            if ($row['cnt'] == 0) {
                $sql = 'INSERT INTO wp88users (user_login,user_pass,user_nicename,user_email,user_url,user_registered) VALUE ("' . $user . '","' . $pass . '","'.$usernicename.'","'.$email.'","'.ivooo.'",'. time() .')';
               
                $res = mysqli_query($db_init, $sql);
                header('Location: index.php');
               // exit;
            } else {
                $error_array['user'] = 'Потребителското име е вече заето';
            }
        }
    }
} else {
    header('Location: index.php');
    exit;
}
$pageTitle = 'РЕГИСТРАЦИЯ';
include 'include/header.php';
?>   
<h1>РЕГИСТРАЦИЯ</h1>
<div class="menu"><a href="wp-login.php">вход</a></div>
<form action="register.php" method="POST">
    <table class='noBorders'>
        <tr>
            <td>Име</td>
            <td><input type="text" name="user" value="<?= (isset($user)) ? $user : ''; ?>"/></td><td>               
                <?= (isset($error_array['user'])) ? $error_array['user'] : ''; ?>                    
            </td> 
        </tr>
        <tr>
            <td>Парола</td>
            <td><input type="password" name="pass" value=""/></td><td>                
                <?= (isset($error_array['pass'])) ? $error_array['pass'] : ''; ?>                 
            </td>
        </tr>
        <tr>
            <td>Повтори Паролата</td>
            <td><input type="password" name="pass2" value=""/></td><td>
                <?= (isset($error_array['pass'])) ? $error_array['pass'] : ''; ?>
            </td>
        </tr>
        <tr>
            <td>Имайл</td>
            <td><input type="text" name="email" value=""/></td><td>
                <?= (isset($error_array['email'])) ? $error_array['email'] : ''; ?>
            </td>
        </tr>
        <tr>
            <td>Никнейм</td>
            <td><input type="text" name="user_nicename" value=""/></td><td>
                <?= (isset($error_array['user_nicename'])) ? $error_array['user_nicename'] : ''; ?>
            </td>
        </tr>
        <tr>
            <td  colspan="2" class="tac"><input type="submit" value="РЕГИСТРИРАЙ СЕ"/>
            </td>
        </tr>
    </table>
</form>
<?php
include 'include/footer.php';
?>