<?php

namespace Xzito\Posts;

class Post {
  private $id;
  private $title;
  private $link;
  private $content;
  private $card;
  private $author;
  private $published_at;

  public function __construct($post_id = '') {
    $this->id = $post_id;
    $this->set_title();
    $this->set_link();
    $this->set_content();
    $this->set_card();
    $this->set_author();
    $this->set_published_at();
  }

  public function id() {
    return $this->id;
  }

  public function title() {
    return $this->title;
  }

  public function link() {
    return $this->link;
  }

  public function content() {
    return $this->content;
  }

  public function card($size = '') {
    $image = $this->card;

    if ($size) {
      $image = wp_get_attachment_image_url($this->card, $size);
    }

    return $image;
  }

  public function author() {
    return $this->author;
  }

  public function published_at() {
    return $this->published_at;
  }

  private function set_title() {
    $this->title = get_post_field('post_title', $this->id, 'display');
  }

  private function set_link() {
    $this->link = get_post_permalink($this->id);
  }

  private function set_content() {
    $this->content = get_post_field('post_content', $this->id, 'display');
  }

  private function set_card() {
    $this->card = get_field('post_images', $this->id)['card'];
  }

  private function set_author() {
    $id = get_post_field('post_author', $this->id);
    $name = get_the_author_meta('display_name', $id);
    $url = get_author_posts_url($id);

    $this->author = ['id' => $id, 'name' => $name, 'url' => $url];
  }

  private function set_published_at() {
    $time = get_post_time('c', false, $this->id, false);
    $date = get_the_date('', $this->id);

    $this->published_at = ['time' => $time, 'date' => $date];
  }
}
