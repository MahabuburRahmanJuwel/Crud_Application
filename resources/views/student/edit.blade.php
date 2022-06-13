@extends('master')

@section('title')
    Add Student
@endsection

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Update Student Info</div>
                        <div class="card-body">
                            <h4 class ="text-sucess text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('student.update',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$student->name}}"  class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" value="{{$student->email}}"class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$student->mobile}}" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address">{{$student->address}}"</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">District Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="district_name">
                                            <option> --Select District Name --</option>
                                            <option value="Dhaka" {{$student->district_name=='Dhaka' ? 'selected' :' '}}> Dhaka</option>
                                            <option value="Manikgonj" {{$student->district_name=='Manikgonj' ? 'selected' :' '}}> Manikgonj</option>
                                            <option value="Narayanganj" {{$student->district_name=='Narayanganj' ? 'selected' :' '}}> Narayanganj</option>
                                            <option value="Savar" {{$student->district_name=='Savar' ? 'selected' :' '}}> Savar</option>
                                            <option value="Dohar" {{$student->district_name=='Dohar' ? 'selected' :' '}}> Dohar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" value="{{$student->dat_of_birth}}" class="form-control" name="dat_of_birth"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="gender" {{$student->gender == 'Male' ? 'checked' :' '}} value="Male"/> Male </label>
                                        <label><input type="radio" name="gender" {{$student->gender == 'Female' ? 'checked' :' '}} value="Female"/> Female </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                        <img src="{{asset($student->image)}}" alt="" height="100" width="130"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Subject Name</label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" name="subject_name[]" {{in_array('Bangla',$subjects)? 'checked': ''}} value="Bangla"> Bangla
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" {{in_array('English',$subjects)? 'checked': ''}} value="English"> English
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" {{in_array('Math',$subjects)? 'checked': ''}}  value="Math"> Math </label>
                                        <label><input type="checkbox" name="subject_name[]" {{in_array('Physics',$subjects)? 'checked': ''}}  value="Physics"> Physics
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]"  {{in_array('Chemistry',$subjects)? 'checked': ''}} value="Chemistry"> Chemistry
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" {{in_array('Biology',$subjects)? 'checked': ''}} value="Biology"> Biology
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-primary px-5"
                                               value="Update Student Info"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
