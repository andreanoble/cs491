<?php include('inc/header.php'); ?>

	<div class="section page">

		<div class="wrapper">

			<h1>Property</h1>


			<form method="post" action="addEntry_process.php">

				<table>
					<tr>
						<th>
							<label for="block">Block </label>
						</th>
						<td>
							<input type="text" name="block" id="block">
						</td>
					</tr>
					<tr>
						<th>
							<label for="lot">Lot</label>
						</th>
						<td>
							<input name="lot" id="lot">
						</td>
					</tr>
					<tr>
						<th>
							<label for="ward">Ward </label>
						</th>
						<td>
							<input type="text" name="ward" id="ward">
						</td>
					</tr>
					<tr>
						<th>
							<label for="street">Street </label>
						</th>
						<td>
							<input type="text" name="street" id="street">
						</td>
					</tr>
					<tr>
						<th>
							<label for="zipcode">Zip Code</label>
						</th>
						<td>
							<input name="zipcode" id="zipcode">
						</td>
					</tr>
					<tr>
						<th>
							<label for="boarded">Boarded</label>
						</th>
						<td>
							<input type="text" name="boarded" id="boarded">
						</td>
					</tr>
					<tr>
						<th>
							<label for="sign">Sign posted </label>
						</th>
						<td>
							<input type="text" name="sign" id="sign">
						</td>
					</tr>
					<tr>
						<th>
							<label for="description">Property Description</label>
						</th>
						<td>
							<textarea name="description" id="description"></textarea>
						</td>
					</tr>
					<tr>
						<th>
							<label for="comments">Comments</label>
						</th>
						<td>
							<textarea type="text" name="comments" id="comments"></textarea>
						</td>
					</tr>
					
				</table>
				<input type="submit" value="Send">
			</form>
		</div>

	</div>

<?php include('inc/footer.php') ?>
