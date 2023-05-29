<?php
require_once 'config/database.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/UserController.php';


$product = new App\Controllers\ProductController($conn);
$controller= new App\Controllers\UserController($conn);

$action = isset($_GET['action']) ? $_GET['action'] : 'users';

switch ($action) {
    case 'products':
        $product->index();
        break;
    case 'create_product':
        $product->create();
        break;
    case 'edit_product':
        $product->edit();
        break;
    case 'update_product':
        $product->update();
        break;
    case 'delete_product':
        $product->delete();
        break;
        case 'users':
            $controller->index();
            break;
        case 'create_user':
            $controller->create();
            break;
        case 'edit_user':
            $controller->edit();
            break;
        case 'update_user':
            $controller->update();
            break;
        case 'delete_user':
            $controller->delete();
            break;   
    default:
        $controller->index();
}