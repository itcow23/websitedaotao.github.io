<?php
require "controller/KhoaHocController.php";
require "controller/Controller.php";
require "controller/KhachHangController.php";
require "controller/TaiKhoanController.php";
require "controller/BaiHocController.php";
require "controller/AdminController.php";
$action = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'login';

switch ($controller){
    case 'login':
        (new Controller())->loginadmin();
        break;
    case 'admin_process':
        (new AdminController())->process();
    case 'admin_logout':
        (new AdminController())->logout();
    case 'khoahoc':
        (new AdminController())->checkadmin();
        switch ($action) {
            case 'index':
                (new KhoaHocController())->index();
                break;
            case 'create':
                (new KhoaHocController())->create();
                break;
            case 'store':
                (new KhoaHocController())->store();
                break;
            case 'edit':
                (new KhoaHocController())->edit();
                break;
            case 'update':
                (new KhoaHocController())->update();
                break;
            case 'delete':
                (new KhoaHocController)->delete();
                break;
            default:
                echo 'What are you doing?';
                break;
        }
        break;
    case 'khachhang':
        (new AdminController())->checkadmin();
        switch ($action) {
            case 'index':
                (new KhachHangController())->index();
                break;
            case 'create':
                (new KhachHangController())->create();
                break;
            case 'store':
                (new KhachHangController())->store();
                break;
            case 'edit':
                (new KhachHangController())->edit();
                break;
            case 'update':
                (new KhachHangController())->update();
                break;
            case 'delete':
                (new KhachHangController())->delete();
                break;
            default:
                echo 'What are you doing?';
                break;
        }
        break;
    case 'taikhoan':
        (new AdminController())->checkadmin();
        switch ($action) {
            case 'index':
                (new TaiKhoanController())->index();
                break;
            case 'delete':
                (new TaiKhoanController())->delete();
                break;
            default:
                echo 'What are you doing?';
                break;
        }
        break;
    case 'baihoc':
        (new AdminController())->checkadmin();
        switch ($action) {
            case 'index':
                (new BaiHocController())->index();
                break;
            case 'create':
                (new BaiHocController())->create();
                break;
            case 'store':
                (new BaiHocController())->store();
                break;
            case 'edit':
                (new BaiHocController())->edit();
                break;
            case 'update':
                (new BaiHocController())->update();
                break;
            case 'delete':
                (new BaiHocController())->delete();
                break;
            default:
                echo 'What are you doing?';
                break;
        }
        break;
    default:
        echo 'What are you doing?';
        break;
}