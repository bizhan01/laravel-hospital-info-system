@extends('admin.layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
            <div class="box box-block bg-white">
              <center><h4 style="color: green">اعلانات تایید شده</h4> </center>
              <h6 class="mb-1">نمایش اطلاعات</h6>
              <table class="table table-striped table-bordered dataTable table-success">
								<thead>
									<tr>
										<th>شماره</th>
										<th>عکس</th>
										<th>عنوان</th>
										<th>غیرفعال سازی</th>
										<th>حذف کاربر</th>
									</tr>
								</thead>
								<tbody>
									@foreach($advertisements as $advertisement)
                  <tr>
                    <td>{{$advertisement->id}}</td>
                    <td><a href="{{asset('img/advertisement').'/'.$advertisement->img}}"><img src="{{asset('img/advertisement').'/'.$advertisement->img}}" height="50px" alt="" /></a></td>
                    <td>{{$advertisement->title}}</td>
										<td><a href = 'blockAdvertisement/{{ $advertisement->id }}'> <i class="fa fa-ban text-warning"></i></a></td>
										<td><a href = '{{url("deleteAvertise").'/'.$advertisement->id}}' onclick='return confirm("حذف شود؟")' title="حذف"> <i class="fa fa-trash text-danger"></i></a></td>
									</tr>
									@endforeach
								</tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>
@endsection
