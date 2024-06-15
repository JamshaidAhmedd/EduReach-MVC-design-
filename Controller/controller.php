<?php
// Controller.php

require_once 'db.php';
require_once 'display.php';

class Controller {
    private $db;
    private $display;

    public function __construct() {
        $this->db = new Database();
        $this->display = new Display();
    }

    public function index() {
        // Load the main view
        require_once 'index.html';
    }

    public function login() {
        // Handle login functionality
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle form submission
            require_once 'submit.php';
        } else {
            require_once 'login.php';
        }
    }

    public function register() {
        // Handle registration functionality
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle form submission
            require_once 'submit.php';
        } else {
            require_once 'register.php';
        }
    }

    public function getUsers() {
        // Display users
        $this->display->getUsers();
    }
}
?>
