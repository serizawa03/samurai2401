<?php
/**
 * Lightning G3 index.php common template-file
 *
 * @package vektor-inc/lightning
 */

use VektorInc\VK_Breadcrumb\VkBreadcrumb;

?><?php lightning_get_template_part( 'header' ); ?>

<?php
do_action( 'lightning_site_header_before', 'lightning_site_header_before' );
if ( apply_filters( 'lightning_is_site_header', true, 'site_header' ) ) {
	lightning_get_template_part( 'template-parts/site-header' );
}
do_action( 'lightning_site_header_after', 'lightning_site_header_after' );
?>

<?php
if ( is_front_page() ) {
	if ( apply_filters( 'lightning_default_slide_display', true ) ) {
		LTG_G3_Slider::display_html();
	}
}
?>

<?php if ( ! is_front_page() ) : ?>

	<?php
	do_action( 'lightning_page_header_before', 'lightning_page_header_before' );
	if ( apply_filters( 'lightning_is_page_header', true, 'page_header' ) ) {
		lightning_get_template_part( 'template-parts/page-header' );
	}
	do_action( 'lightning_page_header_after', 'lightning_page_header_after' );
	?>

	<?php
	do_action( 'lightning_breadcrumb_before', 'lightning_breadcrumb_before' );
	if ( apply_filters( 'lightning_is_breadcrumb_position_normal', true, 'breadcrumb_position_normal' ) ) {
		if ( apply_filters( 'lightning_is_breadcrumb', true, 'breadcrumb' ) ) {
			$vk_breadcrumb      = new VkBreadcrumb();
			$breadcrumb_options = array(
				'id_outer'        => 'breadcrumb',
				'class_outer'     => 'breadcrumb',
				'class_inner'     => 'container',
				'class_list'      => 'breadcrumb-list',
				'class_list_item' => 'breadcrumb-list__item',
			);
			$vk_breadcrumb->the_breadcrumb( $breadcrumb_options );
		}
	}
	do_action( 'lightning_breadcrumb_after', 'lightning_breadcrumb_after' );
	?>

<?php endif; ?>

<?php do_action( 'lightning_site_body_before', 'lightning_site_body_before' ); ?>

<div class="<?php lightning_the_class_name( 'site-body' ); ?>">
	<?php do_action( 'lightning_site_body_prepend', 'lightning_site_body_prepend' ); ?>
	<div class="<?php lightning_the_class_name( 'site-body-container' ); ?> container">

		<div class="<?php lightning_the_class_name( 'main-section' ); ?>" id="main" role="main">
		<?php get_template_part('filter-search'); ?>
					<?php
          //送られてきたパラメーターを取得
          $selected_area = $_GET['area'];
          $selected_type = $_GET['type'];
          $selected_tag = $_GET['tag'];
          // tax_queryを初期化
          $tax_query = array('relation' => 'AND');

          // 地域の絞り込み条件がある場合
          if ($selected_area) {
            $tax_query[] = array(
                'taxonomy' => 'facility_area',
                'terms' => $selected_area,
                'field' => 'slug',
            );
          }

          // タイプの絞り込み条件がある場合
          if ($selected_type) {
            $tax_query[] = array(
                'taxonomy' => 'facility_type',
                'terms' => $selected_type,
                'field' => 'slug',
            );
          }

          // タグの絞り込み条件がある場合
          if ($selected_tag) {
            $tax_query[] = array(
                'taxonomy' => 'facility_tag',
                'terms' => $selected_tag,
                'field' => 'slug',
            );
          }

          // サブループで表示する記事の条件を指定
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'post_type' => 'facility',
            'posts_per_page' => 8,
            'paged' => $paged,
            's' => get_search_query(),
            'tax_query' => $tax_query,
          );

          $wp_query = new WP_Query($args);?>
            <?php if(($selected_style) ||($selected_type)||($selected_tag)) { ;?>
              <h2 class="text-center">検索結果</h2>
            <?php }else{ ?>
            <?php } ?>
          <?php if ($wp_query->have_posts()) : ?>
            <div class="post-list  vk_posts-mainSection">
                <?php
                while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                    <?php get_template_part('template-parts/loop-item-facility'); ?>
                <?php endwhile; ?>
            </div>
          <?php else : ?>
            <p class="text-center">条件に合うフィットネスジム・フィットネスクラブはありませんでした。</p>
            <a href="<?php echo esc_url( home_url() ); ?>/facility/" class="more">一覧へ戻る</a>
          <?php endif; wp_reset_postdata(); ?>


          <?php
          the_posts_pagination(
            array(
                'mid_size'           => 1,
                'prev_text'          => '&laquo;',
                'next_text'          => '&raquo;',
                'type' => 'list',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'lightning') . ' </span>',
            )
          );
          wp_reset_postdata(); ?>

		</div><!-- [ /.main-section ] -->

		<?php
		do_action( 'lightning_sub_section_before', 'lightning_sub_section_before' );
		if ( lightning_is_subsection() ) {
			if ( lightning_is_woo_page() ) {
				do_action( 'woocommerce_sidebar' );
			} else {
				lightning_get_template_part( 'sidebar', get_post_type() );
			}
		}
		do_action( 'lightning_sub_section_after', 'lightning_sub_section_after' );
		?>

	</div><!-- [ /.site-body-container ] -->

	<?php do_action( 'lightning_site_body_append', 'lightning_site_body_append' ); ?>

</div><!-- [ /.site-body ] -->

<?php if ( is_active_sidebar( 'footer-before-widget' ) ) : ?>
<div class="site-body-bottom">
	<div class="container">
		<?php dynamic_sidebar( 'footer-before-widget' ); ?>
	</div>
</div>
<?php endif; ?>

<?php
do_action( 'lightning_site_footer_before', 'lightning_site_footer_before' );
if ( apply_filters( 'lightning_is_site_footer', true, 'site_footer' ) ) {
	lightning_get_template_part( 'template-parts/site-footer' );
}
do_action( 'lightning_site_footer_after', 'lightning_site_footer_after' );
?>

<?php lightning_get_template_part( 'footer' ); ?>
