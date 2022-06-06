@extends('layouts.adminlayout')

@section('admin-content')
<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Movie</h2>
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
											<label for="form__img-upload">Upload Poster</label>
											<input id="form__img-upload" name="poster_path" type="file" accept=".png, .jpg, .jpeg">
											<img id="form__img" src="#" alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row">
									<div class="col-12">
										<div class="form__group">
											<input name="original_title" id="original_title" type="text" class="form__input" placeholder="Title">
										</div>
									</div>

									<div class="col-12">
										<div class="form__group">
											<textarea id="overview" name="overview" type="text" class="form__textarea" placeholder="Description"></textarea>
										</div>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<div class="form__group">
											<input id="release_date" name="release_date" type="text" class="form__input" placeholder="Release year">
										</div>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<div class="form__group">
											<input name="length" id="length" type="text" class="form__input" placeholder="Running timed in minutes">
										</div>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<div class="form__group">
											<select class="js-example-basic-single" id="quality" name="quality">
												<option value="FullHD">FullHD</option>
												<option value="HD">HD</option>
											</select>
										</div>
									</div>

									<div class="col-12 col-lg-6">
										<div class="form__group">
											<div class="form__group">
												<input name="country" type="text" class="form__input" placeholder="Country">
											</div>
										</div>
									</div>

									<div class="col-12 col-lg-6">
										<div class="form__group">
											<select class="js-example-basic-multiple" id="genre" name="genre" multiple="multiple">
												<option name="Action" value="Action">Action</option>
												<option name="Animation" value="Animation">Animation</option>
												<option name="Comedy" value="Comedy">Comedy</option>
												<option name="Crime" value="Crime">Crime</option>
												<option name="Drama" value="Drama">Drama</option>
												<option name="Fantasy" value="Fantasy">Fantasy</option>
												<option name="Historical" value="Historical">Historical</option>
												<option name="Horror" value="Horror">Horror</option>
												<option name="Romance" value="Romance">Romance</option>
												<option name="SciFi" value="Science-fiction">Science-fiction</option>
												<option name="Thriller" value="Thriller">Thriller</option>
												<option name="Western" value="Western">Western</option>
												<option name="Other" value="Other">Other</option>
											</select>
										</div>
									</div>

									<div class="col-12">
										<div class="form__gallery">
											<label id="gallery1" for="form__gallery-upload">Upload Backdrop</label>
											<input data-name="#gallery1" id="form__gallery-upload" name="backdrop_path" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple>
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-lg-6">
								<div class="form__group">
									<div class="form__group">
										<input name="category" id="category" type="text" class="form__input" placeholder="Movie / Tv Show">
									</div>
								</div>
							</div>
							
							<div class="col-12">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="form__video">
											<label id="video" for="form__video-upload">Upload video</label>
											<input name="video" data-name="#movie1" id="form__video-upload" name="movie" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
										</div>
									</div>

									<div class="col-12 col-lg-6">
										<div class="form__group form__group--link">
											<input id="video" name="video" type="text" class="form__input" placeholder="or add a link">
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