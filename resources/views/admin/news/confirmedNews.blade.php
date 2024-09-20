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
              <center><h4 style="color: green">لیست اخبار تایید شده</h4> </center>
              <h6 class="mb-1">نمایش اطلاعات</h6>
              <table class="table table-striped table-bordered dataTable table-success">
								<thead>
									<tr>
										<th>شماره</th>
										<th>عکس</th>
										<th>عنوان خبر</th>
										<th>غیرفعال سازی</th>
										<th>حذف کاربر</th>
									</tr>
								</thead>
								<tbody>
									@foreach($news as $news)
									<tr>
										<td>{{$news->id}}</td>
										<td><a href="{{asset('img/news/').'/'.$news->image}}"><img src="{{asset('img/news/').'/'.$news->image}}" height="50px" alt="" /></a></td>
										<td>{{$news->title}}</td>
										<!-- <td><a href = 'unBlockNews/{{ $news->id }}'  title="فعال سازی"> <i class="fa fa-check text-success"></i></a></td> -->
										<td><a href = 'blockNews/{{ $news->id }}'> <i class="fa fa-ban text-warning"></i></a></td>
										<td><a href = '{{url("deleteNews").'/'.$news->id}}' onclick='return confirm("حذف شود؟")' title="حذف"> <i class="fa fa-trash text-danger"></i></a></td>
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
