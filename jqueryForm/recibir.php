<?php

if (isset($_FILES['avatar'])) {
    $_POST['avatar'] = $_FILES['avatar']['name'];
} else {
    $_POST['avatar'] = 'Sin imagen';
}

print_r($_POST);