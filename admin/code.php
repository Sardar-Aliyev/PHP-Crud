<?php
require '../config/function.php';

if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $number = validate($_POST['number']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $isBan = validate($_POST['is_ban']) == true ? 1 : 0;


    if ($name != '' || $email != '' || $password != '' || $number != '') {

        $query ="INSERT INTO users(name,number,email,password,is_ban,role)
         VALUES ('$name','$number','$email','$password','$isBan','$role')";

        $result =mysqli_query ($conn, $query);

        if ($result) {
            redirect('users.php', 'User/admin added successfully');
        } else {
            redirect('users-create.php', 'something went wrong');
        }
    } else {
        redirect('users-create.php', 'Please fill all input fields');
    }

}

    if (isset($_POST['updateUser'])) {

        $name = validate($_POST['name']);
        $number = validate($_POST['number']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $role = validate($_POST['role']);
        $isBan = validate($_POST['is_ban']);
        $userId = validate($_POST['userId']);

        $user = getByid('users', $userId);

        if ($user['status'] != 200) {
            redirect('users-edit.php?id='.$userId, 'No Such id found');
        }


        if ($name != '' || $email != '' || $password != '' || $number != '') {

            $query = " UPDATE users SET 
            name='$name',
            number='$number',
            email='$email',
            password='$password',
            is_ban='$isBan',
            role='$role'
            
             WHERE id='$userId' ";

            $result = mysqli_query($conn, $query);

            if ($result) {
                redirect('users-edit.php?id='.$userId, 'User/admin Updated successfully');
            } else {
                redirect('users-create.php', 'something went wrong');
            }
        } else {
            redirect('users-create.php', 'Please fill all input fields');
        }
    }

