<?php
ob_start();
include 'includes/db.php';
$db = Database::getConnection();
include 'includes/getImage.php';
include 'includes/_db_queries.php';
include 'admin/inc/admin_db_queries.php';

// const T_CATEGORIES = 'categories';
// const T_POSTS = 'posts';
// const T_COMMENTS = 'comments';
// const T_USERS = 'users';
// const T_USERS_ONLINE = 'users_online';
// const T_ALL = '*';

define('T_CATEGORIES', "categories");
define('T_POSTS', "posts");
define('T_COMMENTS', "comments");
define('T_USERS', "users");
define('T_USERS_ONLINE', "users_online");
define('T_ALL', "*");
