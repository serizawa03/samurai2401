<section class="facility_search">
<h2>詳細検索</h2>
<p style="text-align: right;"><a href="<?php echo esc_url( home_url() ); ?>/facility/" class="reset_btn">検索をリセットする</a></p>
	<form action="<?php echo esc_url( home_url() ); ?>/facility/" method="get">

		<p class="search_ttl">地域</p>
			<select name="area">
				<option value="">地域を選択</option>
				<?php 
						$my_tax = 'facility_area';  //取得したいタクソノミー名
						$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );  //第一階層のタームだけ取得
						if ( !empty( $parent_terms ) ) :
							//第1ループ
							foreach ( $parent_terms as $pt ) : 
								$pt_id = $pt->term_id;
								$pt_name = $pt->name;
								$pt_slug = $pt->slug;
					?>
    			<option value="<?php echo $pt_slug;?>"><?php echo $pt_name;?></option>
						<?php 
							$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
							if ( !empty( $child_terms ) ) :
							//第2ループ
								foreach ( $child_terms as $ct ) : 
									$ct_id = $ct->term_id;
									$ct_name = $ct->name;
									$ct_slug = $ct->slug;
							?>
									<option value="<?php echo $ct_slug;?>">　<?php echo $ct_name;?></option>
						<?php
								endforeach;  //End : 第２ループ
							endif;
						?>
		<?php
				endforeach;  //End : 第1ループ
			endif;
		?>

			</select>


    <p class="search_ttl">ジャンル</p>
			<?php $terms = get_terms('facility_type'); ?>
			<?php  foreach ($terms as $term ) : ?>
					<label><input type="checkbox" name="type[]" value="<?php echo $term->slug;?>"><span><?php echo $term->name;?></span></label>
			<?php endforeach; ?>

			<p class="search_ttl">人気キーワード</p>
			<?php $terms = get_terms('facility_tag'); ?>
			<?php  foreach ($terms as $term ) : ?>
					<label><input type="checkbox" name="tag[]" value="<?php echo $term->slug;?>"><span><?php echo $term->name;?></span></label>
			<?php endforeach; ?>

			<input type="hidden" name="s" value="<?php the_search_query(); ?>">
			<input type="submit" class="btn" value="検索する">

	</form>
</section>