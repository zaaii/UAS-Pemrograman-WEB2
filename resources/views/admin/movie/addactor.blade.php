@extends('layouts.adminlayout')

@section('admin-content')
<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Data Actor</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{route('movie.store')}}" method="POST" class="form" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-12 col-md-5 form__cover">
								<div class="row">
									<div class="col-12 col-sm-6 col-md-12">
										<div class="form__img">
											<label for="actor_img">Upload Image (190 x 270)</label>
											<input id="actor_img" name="actor_img" type="file" accept=".png, .jpg, .jpeg">
											<img id="form__img" src="#" alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row">
									<div class="col-12">
										<div class="form__group">
											<input name="name" id="name" type="text" class="form__input" placeholder="Name">
										</div>
									</div>

									<div class="col-12">
										<div class="form__group">
											<select class="js-example-basic-single" id="gender" name="gender">
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<div class="form__group">
											<input id="born_date" name="born_date" type="text" class="form__input" placeholder="Born year">
										</div>
									</div>

                                    <div class="col-12 col-sm-6 col-lg-3">
										<div class="form__group">
											<input id="age" name="age" type="text" class="form__input" placeholder="Old year">
										</div>
									</div>

									<div class="col-12 col-lg-6">
										<div class="form__group">
											<div class="form__group">
												<input name="country" type="text" class="form__input" placeholder="Country">
											</div>
										</div>
									</div>

								

									<div class="col-12">
										<div class="form__gallery">
											<label id="gallery1" for="form__gallery-upload">Upload photos</label>
											<input data-name="#gallery1" id="form__gallery-upload" name="gallery" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple>
										</div>
									</div>
								</div>
							</div>

									<div class="col-12">
										<button type="submit" class="form__btn">publish</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- end form -->
			</div>
		</div>
	</main>
	<!-- end main content -->
    @endsection