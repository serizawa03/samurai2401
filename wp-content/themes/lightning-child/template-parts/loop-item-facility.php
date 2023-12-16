<div class="fac-item">
	<h3><?php the_title(); ?></h3>
	<div class="fac-text">
		<div class="row">
			<div class="col-md-4">
				<?php the_post_thumbnail('full'); ?>
				<a href="<?php the_permalink(); ?>" class="more">
				詳細を見る
				</a>
			</div>
			<div class="col-md-8">
				<?php the_field('fac4'); ?>
				<table>
						<tr>
							<th>所在地</th>
							<td><?php the_field('fac1'); ?></td>
						</tr>
						<tr>
							<th>TEL</th>
							<td><?php the_field('fac2'); ?></td>
						</tr>
						<tr>
							<th>営業時間</th>
							<td><?php the_field('fac3'); ?></td>
						</tr>
					</table>
					<?php
									$terms = get_the_terms($post->ID, 'facility_type');
									if ( $terms ) {
										foreach ( $terms as $term ) {
											$term_link = get_term_link( $term );
											echo '<a class="tag_link" href="'.esc_url( $term_link ).'">'.$term->name.'</a>';
										}
									}
									?>
			</div>
		</div>
	</div>
</div>