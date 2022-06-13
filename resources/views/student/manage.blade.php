@extends('master')
@section('title')
   Manage Student
@endsection
@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card ">
                        <div class="card-header text-center text-success ">All Student Info</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>mobile</th>
                                        <th>Address</th>
                                        <th>District Name</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>image</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->mobile}}</td>
                                            <td>{{$student->address}}</td>
                                            <td>{{$student->district_name}}</td>
                                            <td>{{$student->dat_of_birth}}</td>
                                            <td>{{$student->gender}}</td>
                                            <td>
                                                <img src="{{asset($student->image)}}" alt="" height="60" width="90"/>
                                            </td>
                                            <td>{{$student->subject}}</td>
                                            <td>
                                                <a href="{{route('student.edit',['id'=>$student->id])}}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{route('student.delete',['id'=>$student->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
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
    </section>
@endsection
