<?php

session_start();

if(!isset($_SESSION['level'])){
    header("location:?controller=login");
}