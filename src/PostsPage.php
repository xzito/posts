<?php

namespace Xzito\Posts;

class PostsPage {
  private $id;
  private $banner;

  public function __construct() {
    $this->id = get_option('page_for_posts') ?? '';
    $this->set_banner();
  }

  public function banner($size = 'full') {
    return wp_get_attachment_image_url($this->banner, $size);
  }

  private function set_banner() {
    $this->banner = get_field('page_banner', $this->id);
  }
}
