<section>
	<table class="thread-table">
		<tr>
			<th>Post Title</th>
			<th>Author</th>
			<th>Most Recent Post</th>
		</tr>
		<tr>
			<td>
				<a href="#">Thread<?php print_r($threads); ?></a>
			</td>
			<td>Author Name</td>
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
	</table>
</section>