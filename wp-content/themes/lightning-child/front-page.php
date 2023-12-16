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



<?php do_action( 'lightning_site_body_before', 'lightning_site_body_before' ); ?>

<div id="mv">
<section class="facility_search_top container">
<h2>理想のフィットネスのための<br>完全ガイド</h2>
<p>かんたん検索からスタート！</p>
	<form action="<?php echo esc_url( home_url() ); ?>/facility/" method="get">

		<p class="search_ttl">地域</p>
			<select name="area">
				<option value="">地域を選択</option>
				<?php $terms = get_terms('facility_area', ['parent' => 0]); ?>
				<?php  foreach ($terms as $term ) : ?>
						<option value="<?php echo $term->slug;?>"><?php echo $term->name;?></option>
				<?php endforeach; ?>
			</select>
    <p class="search_ttl">ジャンル</p>
			<select name="type">
				<option value="">ジャンルを選択</option>
				<?php $terms = get_terms('facility_type'); ?>
				<?php  foreach ($terms as $term ) : ?>
						<option value="<?php echo $term->slug;?>"><?php echo $term->name;?></option>
				<?php endforeach; ?>
			</select>

			<input type="hidden" name="s" value="<?php the_search_query(); ?>">
			<input type="submit" class="btn" value="検索する">
	</form>
</section>
</div>

<div class="<?php lightning_the_class_name( 'site-body' ); ?>">
	<?php do_action( 'lightning_site_body_prepend', 'lightning_site_body_prepend' ); ?>
	<div class="<?php lightning_the_class_name( 'site-body-container' ); ?> container">

		<div class="<?php lightning_the_class_name( 'main-section' ); ?>" id="main" role="main">
			<?php do_action( 'lightning_main_section_prepend', 'lightning_main_section_prepend' ); ?>

<div>
<?php /*	
<h2 class="mt-0">人気のコンテンツ</h2>

	<?php if ( wp_is_mobile() ) : ?>
	<?php 
if (function_exists('wpp_get_mostpopular')) {
  $arg = array (
    'range' => 'daily',//集計する期間 {daily(1日), weekly(1週間), monthly(1ヶ月), all(全期間)}
    'order_by' => 'views',//表示順｛views（閲覧数),comments（コメント数）,avg（1日の平均）}
    'post_type' => 'post',//ポストタイプを指定 {post, page, カスタムポスト名}
    'title_length' => '24',//表示させるタイトル文字数
    'excerpt_length' => '50',//抜粋文字数
    'stats_comments' => '0',//コメント数を表示{ 1(表示), 0(非表示) }
    'stats_date' => 1,//日付を表示 { 1(表示), 0(非表示) }
    'stats_date_format' => 'F j, Y',//日付表示フォーマット
    'limit' => 10, //表示数
    'stats_views' => '0',//閲覧数表示 { 1(表示), 0(非表示) }
    'thumbnail_width' => '150',//サムネイルの幅
    'thumbnail_height' => '150',//サムネイルの高さ
    'stats_category' => 1,//カテゴリー名を使用する { 1(する), 0(しない) } {category}
    'post_html' => '<li>{thumb}<div><p class="ttl"><span>{category}</span>{title}</p><p>{summary}</p></div></li>'//表示されるhtmlの設定（{thumb}はリンク付きのサムネイル画像,{title}はリンク付きのタイトル,{summary}は抜粋文）
  );
  //ランキングを表示  
  echo '<ol class="column-list">';
    wpp_get_mostpopular($arg);//リストの出力
  echo '</ol>';  
}
?>
<?php else: ?>
	<?php 
if (function_exists('wpp_get_mostpopular')) {
  $arg = array (
    'range' => 'daily',//集計する期間 {daily(1日), weekly(1週間), monthly(1ヶ月), all(全期間)}
    'order_by' => 'views',//表示順｛views（閲覧数),comments（コメント数）,avg（1日の平均）}
    'post_type' => 'post',//ポストタイプを指定 {post, page, カスタムポスト名}
    'title_length' => '80',//表示させるタイトル文字数
    'excerpt_length' => '180',//抜粋文字数
    'stats_comments' => '0',//コメント数を表示{ 1(表示), 0(非表示) }
    'stats_date' => 1,//日付を表示 { 1(表示), 0(非表示) }
    'stats_date_format' => 'F j, Y',//日付表示フォーマット
    'limit' => 10, //表示数
    'stats_views' => '0',//閲覧数表示 { 1(表示), 0(非表示) }
    'thumbnail_width' => '150',//サムネイルの幅
    'thumbnail_height' => '150',//サムネイルの高さ
    'stats_category' => 1,//カテゴリー名を使用する { 1(する), 0(しない) } {category}
    'post_html' => '<li>{thumb}<div><p class="ttl"><span>{category}</span>{title}</p><p>{summary}</p></div></li>'//表示されるhtmlの設定（{thumb}はリンク付きのサムネイル画像,{title}はリンク付きのタイトル,{summary}は抜粋文）
  );
  //ランキングを表示  
  echo '<ol class="column-list">';
    wpp_get_mostpopular($arg);//リストの出力
  echo '</ol>';  
}
?>
<?php endif; ?>
*/?>


	<h2>読み物・コラム</h2>
	<?php
		// 固定ページに特定のカテゴリーを表示
		$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
		?>
		<ol class="column-list row">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li class="col-md-6">
					<a href="<?php echo get_permalink(); ?>">
						<?php the_post_thumbnail(array( 150, 150 )); ?>
		</a>
						<p class="ttl"><span class="date"><?php echo get_the_date('Y.m.d'); ?></span><span class="cat"><?php the_category(' '); ?></span>
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
					</a>
				</li>
				<?php endwhile; ?>
		</ol>
		<?php endif; wp_reset_postdata(); ?>

	<h2>フィットネスクラブ、スポーツジムを都道府県から探す</h2>
	<div class="">
	<?php 
			$my_tax = 'facility_area';  //取得したいタクソノミー名
			$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );  //第一階層のタームだけ取得
			if ( !empty( $parent_terms ) ) :
				echo '<ul class="link-area-wrap">';

				//第1ループ
				foreach ( $parent_terms as $pt ) : 
					$pt_id = $pt->term_id;
					$pt_name = $pt->name;
					$pt_url = get_term_link($pt);
					?>
					<li>
						<a href="<?php echo $pt_url; ?>"><?php echo $pt_name; ?></a>
						<?php 
							$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
							if ( !empty( $child_terms ) ) :
								echo '<ul class="child">';

							//第2ループ
								foreach ( $child_terms as $ct ) : 
									$ct_id = $ct->term_id;
									$ct_name = $ct->name;
									$ct_url = get_term_link($ct);
						?>
									<li class="link-item">
										<a href="<?php echo $ct_url; ?>"><?php echo $ct_name; ?></a>
									</li>
						<?php
								endforeach;  //End : 第２ループ
								echo '</ul>';
							endif;
						?>
					</li>
				<?php
					endforeach;  //End : 第1ループ
					echo '</ul>';
				endif;
			?>
		</div>

	<h2>人気の条件からおすすめのフィットネスクラブ、スポーツジムを探す</h2>
	<div>
		<ul class="link-item-wrap">
			<?php // タームの一覧を表示
				$catlist = wp_list_categories(array(
					'taxonomy' => 'facility_tag', // タクソノミーの指定
					'title_li' => '', // リストの外側に表示されるタイトルを非表示
				));
				echo $catlist; // タームの一覧を表示
			?>
		</ul>
	</div>

</div>

			<?php do_action( 'lightning_main_section_append', 'lightning_main_section_append' ); ?>
		</div><!-- [ /.main-section ] -->
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
