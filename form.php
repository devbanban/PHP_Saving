<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top: 20px">
			<h3>::Form Add Income::</h3>
			<br />
			<form action="index.php?p=adddb" method="post" class="form-horizontal">
				<div class="form-group row">
					<div class="col-sm-2 col-form-label">
						รายละเอียด
					</div>
					<div class="col-sm-7">
						<textarea name="detail" class="form-control" required></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 col-form-label">
						จำนวนเงิน
					</div>
					<div class="col-sm-2">
						<input type="number" name="amount" class="form-control"  required>
					</div>
					<div class="col-sm-2"> บาท 
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-2">
						<button type="submit" name="save" class="btn btn-primary">บันทึก
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>