<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
	.error-template {
		padding: 40px 15px;
		text-align: center;
	}

	.error-actions {
		margin-top: 15px;
		margin-bottom: 15px;
	}

	.error-actions .btn {
		margin-right: 10px;
	}
</style>

<div class="container">

	<div class="row">

		<div class="error-template">
			<h1>Oops!</h1>
			<h2>404 Not Found</h2>
			<div class="error-details">
				Sorry, an error has occured, Requested page not found!<br>
			</div>
			<div class="error-actions">
				<a href="<?= base_url() ?>" class="btn btn-lg btn-primary">
					<i class="icon-home icon-white"></i> Take Me Home </a>
			</div>
		</div>

	</div>

</div>