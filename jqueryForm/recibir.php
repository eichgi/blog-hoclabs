<?php

if (file_exists($_FILES['avatar']['tmp_name'])) {
    $_POST['avatar'] = $_FILES['avatar']['name'];
}

print_r($_POST);