<section>
	<table class="thread-table">
		<tr>
			<th>Post Title</th>
			<th>Author</th>
			<th>Most Recent Post</th>
		</tr>

		<?php 
			foreach ($threads as $thread) { ?>
				<tr>
					<td>
						<?php echo $thread->title; ?>
					</td>
					<td>
					<?php echo $thread->author_name; ?>
					</td>
					<td>Date
							<form action="#" method="post">
								<input type="hidden" name="id" value= "">
									<button type="submit">
										Delete This
									</button>
								</input>
							</form>
					</td>
				</tr>
				<?php
			}
		?>
	</table>
</section>