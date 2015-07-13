<?php

$current_page_id = get_the_ID();
$the_parent_page_id = array_pop(get_ancestors(get_the_id(), 'page')); 
$current_parent = $post->post_parent; 

$args = [
  'sort_order' => 'desc',
  'sort_column' => 'date',
];

$pages = get_pages($args);

?>
<section class="menu-pages">
  <div class="container">
    <ul class="list-inline">
      <li>our products:</li>
      <?php foreach ($pages as $page): if($page->post_parent == $the_parent_page_id) :?>
        <?php $is_parent = in_array($page->ID, get_ancestors($current_page_id, 'page')) ?>
        <li <?php echo ($page->ID == $current_page_id || $is_parent) ? 'class="active"' : '' ?>>
          <a href="<?php echo $page->guid ?>">
              <?php echo $page->post_title ?>
          </a>
        </li>
      <?php endif; endforeach ?>
    </ul>
  </div>
</section>