<div class="modal fade" id="instagramConnect" tabindex="-1" aria-labelledby="instagramConnectLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" id="close-modal">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body modal-form pb-5 pt-0">
	        <div class="row justify-content-center">
	        	<div class="col-md-8 col-sm-8">

	        		<form>
	        			<div class="form-step">
	        				<p class="mb-4 text-center">Enter username of your Instagram Account</p>
		        			<div class="form-group">
		        				<input type="text" class="form-control form-control-lg text-center" id="insta-username"/>
		        			</div>
		        			<!-- /.form-group -->
		        			<button class="btn btn-block btn-lg btn-danger step-next" type="button">Next</button>
	        			</div>
	        			<!-- /.form-step -->
	        			<div class="form-step" style="display: none;">
	        				<p class="mb-4 text-center">Replace your instafram account bio with the bellow code</p>
		        			<div class="form-group">
								<div class="form-control form-control-lg text-center" id="generated-code"></div>
		        			</div>
		        			<!-- /.form-group -->
							<button class="btn btn-block btn-lg btn-danger" id="verify-now" type="button">Verify Instagram</button>
							<button class="btn btn-block btn-lg btn-danger" id="working" type="button" disabled style="display: none">
								<div class="spinner-border text-light" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</button>
							
	        			</div>
	        			<!-- /.form-step -->
	        		</form>
	        	</div>
	        	<!-- /.col-md-7 col-sm-8 -->
	        </div>
	        <!-- /.row -->
	      </div>
	    </div>
	  </div>
	</div>

	<script>
		$(document).ready(function(){
			$('#close-modal').click (function(){
				$('#insta-username').val('');
				$('#generated-code').val('');
				
				location.href = "{{route('user.profileVerification')}}";
			});
		})
	</script>