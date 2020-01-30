<?php

namespace Xzito\Posts;

class Posts {

  public function __construct() {
    add_action('acf/save_post', [$this, 'set_fields_on_save'], 20);
  }
  public function set_fields_on_save($post_id) {
    if (!$this->will_set_on_save($post_id)) {
      return;
    }

    $post = new Post($post_id);

    $this->set_post_thumbnail_on_save($post);
  }

  private function set_post_thumbnail_on_save($post) {
    set_post_thumbnail($post->id(), $post->card());
  }

  private function will_set_on_save($id) {
    return (get_post_type($id) == 'post' ? true : false);
  }
}
