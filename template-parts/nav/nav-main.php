<?php
/**
 * Bootstrap navigation file
 * 
 * @package ASM
 */

$menu_class = \ASM_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'asm-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

$current_page_title = single_post_title( '', false );
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light main-nav nav-set-100">

  <?php 
    if( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    }
  ?>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
    <?php 
    if( ! empty( $header_menus ) && is_array( $header_menus ) ) : 
    ?>
      <ul class="navbar-nav mr-20">
        <?php 
        foreach( $header_menus as $menu_item ) : 

          if( ! $menu_item->menu_item_parent ) : 
            // get child menu items if applicable
            $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
            // set boolean menu item has children
            $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );

            if( ! $has_children ) :
            ?>
              <li class="nav-item">
                <a class="nav-link <?php $current_page_title === $menu_item->title ? print 'active' : print '' ; ?>" href="<?php echo esc_url( $menu_item->url ) ?>"><?php echo esc_html( $menu_item->title ) ?></a>
              </li>
            <?php 
              else :  
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" <?php $current_page_title === $menu_item->title ? print 'active' : print '' ; ?> href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $menu_item->title ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php  
                  foreach( $child_menu_items as $child_menu_item ) : 
                  ?>
                    <a class="dropdown-item <?php $current_page_title === $child_menu_item->title ? print 'dropdown-active' : print '' ; ?>" href="<?php echo esc_html( $child_menu_item->url ) ?>">
                      <?php echo esc_html( $child_menu_item->title ) ?>
                    </a>
                  <?php  
                  endforeach;
                  ?>
                </div>
              </li>
            <?php 
            endif; // has children 
          endif; // ! menu item has parent 
        endforeach; 
        ?>
      </ul>
      <!-- <button class="btn btn-lg">Donate</button> -->
    <?php 
    endif 
    ?>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
