<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style>
    .main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#009edf;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}
</style>
	<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post" action="/login">
                        @csrf

						<div class="form-group">
							<label for="name">Your Name</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Your Email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" placeholder="Enter your Email"/>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Username</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" placeholder="Enter your Username"/>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
								</div>
						</div>
                        <div>
                            <input name="up" type="text">
                        </div>

						<div class="form-group">
							<label for="confirm">Confirm Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" placeholder="Confirm your Password"/>
								</div>
						</div>

				<button type="submit">SUBMIT</button>

					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
