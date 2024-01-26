<?php

require_once __DIR__ . '/db_connection.php';

if (isset($_POST['save_setting'])) {

    $save = $pdo->prepare("UPDATE settings SET 
        title=:title,
        description=:description,
        keyword=:keyword,
        adress=:adress,
        phone=:phone,
        email=:email
    ");

    $update = $save->execute(array(
        'title' => htmlspecialchars($_POST['title']),
        'description' => htmlspecialchars($_POST['description']),
        'keyword' => htmlspecialchars($_POST['keyword']),
        'adress' => htmlspecialchars($_POST['adress']),
        'phone' => htmlspecialchars($_POST['phone']),
        'email' => htmlspecialchars($_POST['email']),

    ));
    if ($update) {
        header('Location: /personal_blog/admin_panel/settings.php?page=settings&status=ok');
        exit();
    } else {
        header('Location: /personal_blog/admin_panel/settings.php?page=settings&status=no');
        exit();
    }
}



if (isset($_POST['save_social'])) {

    $save = $pdo->prepare("UPDATE settings SET 
    social_facebook=:social_facebook,
    social_instagram=:social_instagram,
    social_youtube=:social_youtube,
    social_twitter=:social_twitter
");

    $update = $save->execute(array(
        'social_facebook' => htmlspecialchars($_POST['facebook']),
        'social_instagram' => htmlspecialchars($_POST['instagram']),
        'social_youtube' => htmlspecialchars($_POST['youtube']),
        'social_twitter' => htmlspecialchars($_POST['twitter'])
    ));
    if ($update) {
        header('Location: /personal_blog/admin_panel/settings.php?page=social&status=ok');
        exit();
    } else {
        header('Location: /personal_blog/admin_panel/settings.php?page=social&status=no');
        exit();
    }
}
