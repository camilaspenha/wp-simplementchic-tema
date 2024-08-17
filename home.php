<?php 
/* Template Name: Home */ 

get_header(); 
$fields = get_fields(); 
?>

  <?php if($fields['hero']) { ?>
    <!-- Hero -->
    <?php get_template_part( 'templates/header/hero', 'hero', $fields['hero'] ); ?>
  <?php } ?>

  <?php 
  foreach($fields['components'] as $key => $layout){
    switch ($layout['acf_fc_layout']) {

      case 'sobre':
        get_template_part( 'templates/content/sobre', 'sobre', $layout );
        break;
        
      case 'blockquote':
        get_template_part( 'templates/content/blockquote', 'blockquote', $layout );
        break;
    
      case 'fazemos':
        get_template_part( 'templates/content/fazemos', 'fazemos', $layout );
        break;

      case 'entregamos':
        get_template_part( 'templates/content/entregamos', 'entregamos', $layout );
        break;

      case 'pq_nos':
        get_template_part( 'templates/content/pq_nos', 'pq_nos', $layout );
        break;

      case 'team':
        get_template_part( 'templates/content/team', 'team', $layout );
        break;
      case 'portfolio':
        get_template_part( 'templates/content/portfolio', 'portfolio', $layout );
        break;
      default:
        break;
      }
    }
  ?>

<?php get_footer(); ?>