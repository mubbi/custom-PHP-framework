<?php
/**
 * Mubbi Custom PHP Framework
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Mubbasher Ahmed Qureshi
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package mubbi/custom-PHP-framework
 * @author  Mubbasher Ahmed Qureshi
 * @copyright   Copyright (c) 2018, Mubbasher Ahmed. (http://mubbiqureshi.com/)
 * @license http://opensource.org/licenses/MIT  MIT License
 * @since   Version 1.0.0
 */

// Define Constants
include 'system/config.php';

// Get Controller
if (!isset($_GET['c'])) {
    $_GET['c'] = 'Default';
}
// Get Action
if (!isset($_GET['a'])) {
    $_GET['a'] = 'index';
}

// SET Controller & Action
$controller = $_GET['c'];
$action = $_GET['a'];

// Verify Controller
if (!file_exists(CONTROLLER . $controller . 'Controller.php')) {
    die('Controller: ' . $controller . ' file does not exist');
}

// Include Controller
include CONTROLLER . $controller . 'Controller.php';
$controllerClass = $controller. 'Controller';

// Verify Controller Class
if (!class_exists($controllerClass)) {
    die('Class: ' . $controllerClass . '  does not exist');
}

// Instantiate Controller Class
$objController = new $controllerClass;

// Verify Action Method
if (!method_exists($objController, $action)) {
    die('Class Method: ' . $action . ' does not exists');
}

// Start the App
$objController->$action();
