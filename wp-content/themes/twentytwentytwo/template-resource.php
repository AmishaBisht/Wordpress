<?php $terms = get_terms('priority');
  
  foreach($terms as $term){
    echo '<li><a href="?priority= '.$term->slug.' " >'. $term->name . '</a></li>';
  }
  ?>
 
<?php 

  $priorities = $_GET['priority']; 

  $hompage = array(
    'post_type' => 'resource',
    'post_status'=> 'publish',
    'tax_query'=> array(
        array(
            'taxonomy' => 'priority',
            'field' => 'name',
            'terms' =>  $priorities
        )
    )
  ); 
  $hompageEvent = new WP_Query($hompage);
  var_dump($hompageEvent->have_posts());
  while($hompageEvent->have_posts()){
    $hompageEvent->the_post();?>
    <li><a href="<?php the_permalink()?>" target="_blank" rel="noopener noreferrer">
    <?php the_title(); ?>
    </a></li>
  <?php }
  ?>