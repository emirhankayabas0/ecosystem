<?php

class User
{
    public static function Login($data)
    {
        $_SESSION["user_id"] = $data['user_id'];
        $_SESSION["user_name"] = $data['user_name'];
        $_SESSION["user_surname"] = $data['user_surname'];
        $_SESSION["user_email"] = $data['user_email'];
        $_SESSION["user_rank"] = $data['user_rank'];
        $_SESSION["user_login_confirmation"] = $data['user_login_confirmation'];
        $_SESSION["user_login_confirmation_code"] = $data['user_login_confirmation_code'];
    }

    public static function Register($data)
    {
        global $db;
        $query = $db->prepare('UPDATE users SET user_name = :user_name, user_surname = :user_surname, user_url = :user_url, user_email = :user_email, user_password = :user_password');
        return $query->execute($data);
    }
    public static function userExist($user_email)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_email = :user_email');
        $query->execute([
            'user_email' => $user_email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
