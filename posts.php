<?php

/**
 * Plugin Name: Posts
 * Description: A WordPress plugin for Posts.
 * Version: 1.1.0
 * Author: James Boynton
 */

namespace Xzito\Posts;

$autoload_path = __DIR__ . '/vendor/autoload.php';

if (file_exists($autoload_path)) {
  require_once($autoload_path);
}

new Posts();
