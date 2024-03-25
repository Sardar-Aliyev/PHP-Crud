<?php

require '../config/function.php';

$paraResult = checkParamId('id');

if (is_numeric($paraResult)) {

    $userId = validate($paraResult);

    $user = getByid('users', $userId);

    if ($user['status'] == 200) {

        $userDelete = deleteQuery('users', $userId);

        if ($userDelete) {
            redirect('users.php', 'user deleted successfully');
        }
    } else {
        redirect('users.php', $user['message']);
    }
} else {
    redirect('users.php', $paraResult);
}
