<?php
// Controller.php

class Controller {
    public function __construct() {
        // Initialize any dependencies
    }
    
    public function index() {
        // Load the main view
        require_once 'index.html';
    }
    
    public function login() {
        // Handle login functionality
        require_once 'login.php';
    }
    
    public function register() {
        // Handle registration functionality
        require_once 'register.php';
    }
}
