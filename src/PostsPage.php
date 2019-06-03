<?php

namespace Xzito\Posts;

class PostsPage {
  private $banner;

  public function __construct() {
    $this->set_banner();
  }

  public function banner($size = 'full') {
    return wp_get_attachment_image_url($this->banner, $size);
  }

  private function set_banner() {
    $this->banner = get_field('posts_page', 'options')['banner'];
  }
}

