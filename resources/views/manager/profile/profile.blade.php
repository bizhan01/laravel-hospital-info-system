@extends('manager.layouts.master')

@section('content')

<div class="content-area pb-1">
	<div class="profile-header mb-1">
		<div class="profile-header-cover img-cover" style="background-image: url({{asset('site-asset/img/bg-img/workflow.png')}});"></div>
		<div class="profile-header-counters clearfix">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<div class="card profile-card">
					<div class="profile-avatar">
						<img src="{{ asset('img/user_profile/').'/'.Auth::user()->photo }}" alt="">
					</div>
					<div class="card-block">
						<h4 class="mb-0-25">{{ Auth::user()->full_name }}</h4>
						<!-- <div class="text-muted mb-1">اسم مکتب</div> -->
					</div>
					<ul class="list-group">
						<a class="list-group-item" href="#" >
							<i class="ti-worlds mr-0-5"></i>
							<span>شماره تماس:</span>
							<span style="direction: ltr; text-align: left">{{Auth::user()->phone}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>نام کاربری:</span>
							<span>{{Auth::user()->email}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>آدرس:</span>
							<span>{{Auth::user()->address}}</span>
						</a>
					</ul>
          <ul class="list-group">
              @foreach($socials as $social)
              <a class="list-group-item" href="{{$social->url}}">
                  <i class="ti-worlds mr-0-5"></i> {{$social->name}}
              </a>
              @endforeach
          </ul>
				</div>
			</div>
      <div class="col-sm-8 col-md-9">
        <!-- social -->
        <form class="card write-something" method="POST" action="{{route('saveSocial')}}">
        @csrf
            <textarea name="social_link" placeholder="لینک شبکه اجتماعی" dir="ltr" required></textarea>
            <div class="card-footer">
                <div class="clearfix">

                    <input type="text" name="social_name" placeholder="نام شبکه(فیسبوک، تویتر ...)" required>
                    <div class="float-xs-right">
                        <button type="submit" class="btn btn-success btn-rounded">{{__('main.save')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

			<div class="col-sm-8 col-md-9">

				<div class="card mb-0">
					<ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#stream" role="tab">ویرایش اطلاعات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photos" role="tab">تغییر عکس</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-password" role="tab">تغییر گذرواژه</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="stream" role="tabpanel">
							<form method="post" action="{{ route('updateNameUser') }}">
								@csrf
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">اسم کاربری</label>
										<input type="name" name="name" class="form-control" value="{{Auth::user()->full_name}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">شماره تماس</label>
										<input type="text" name="phone_number" placeholder="0799999999" data-mask="0799999999" class="form-control" style="direction: ltr" value="{{Auth::user()->phone}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">آدرس</label>
										<input type="name" name="address" class="form-control" value="{{Auth::user()->address}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
						<div class="tab-pane card-block" id="photos" role="tabpanel">
							<div class="gallery-2 row">
								<form method="post" action="{{ route('updateUserImage') }}" enctype="multipart/form-data">
									@csrf
									<div class="col-md-3 col-sm-3"></div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="g-item">
											<div>
                    		<input type="file" name="image" accept="image/*" id="input-file-now" class="dropify"  required/>
                    		<input type="submit" class="btn btn-success form-control" value="ذخیره">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane card-block" id="change-password" role="tabpanel">
							<form method="post" action="{{ route('updateUserPass') }}">
								@csrf
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>گذروارژه قبلی</label>
										<input type="password" name="current-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>گذرواژه جدید</label>
										<input type="password" name="new-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>تکرار گذرواژه ی جدید</label>
										<input type="password" name="confirm_password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
					</div>
				</div><br>
				</div>
			</div>
	</div>
</div>
@endsection
