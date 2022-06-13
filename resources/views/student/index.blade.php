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
                        <div class="card-header">Add Student Form</div>
                        <div class="card-body">
                            <h4 class ="text-sucess text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('student.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">District Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="district_name">
                                            <option> --Select District Name --</option>
                                            <option value="Dhaka"> Dhaka</option>
                                            <option value="Manikgonj"> Manikgonj</option>
                                            <option value="Narayanganj"> Narayanganj</option>
                                            <option value="Savar"> Savar</option>
                                            <option value="Dohar"> Dohar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="dat_of_birth"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="gender" value="Male"/> Male </label>
                                        <label><input type="radio" name="gender" value="Female"/> Female </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Subject Name</label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" name="subject_name[]" value="Bangla"> Bangla
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" value="English"> English
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" value="Math"> Math </label>
                                        <label><input type="checkbox" name="subject_name[]" value="Physics"> Physics
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" value="Chemistry"> Chemistry
                                        </label>
                                        <label><input type="checkbox" name="subject_name[]" value="Biology"> Biology
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-primary px-5"
                                               value="Create New Student"/>
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
