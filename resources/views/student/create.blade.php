@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register a new student</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('student.store') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="level_id">Grade Level</label>
                                    <select name="level_id" id="level_id" class="form-control" required>
                                        <option value="" hidden {{ !old('level_id') ? 'selected' : '' }}>Grade Level</option>
                                        @forelse ($levels as $level)
                                            <option value="{{ $level->id }}" {{ old('level_id') == $level->id ? 'selected' : '' }}>{{ $level->description }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="schoolyear_id">School Year</label>
                                    <select name="schoolyear_id" id="schoolyear_id" class="form-control" required>
                                        <option value="" hidden {{ !old('schoolyear_id') ? 'selected' : '' }}>School Year</option>
                                        @forelse ($schoolyears as $schoolyear)
                                            <option value="{{ $schoolyear->id }}" {{ old('schoolyear_id') == $schoolyear->id ? 'selected' : '' }}>{{ $schoolyear->description }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Student Basic Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input
                                                    id="fname"
                                                    class="form-control"
                                                    type="text"
                                                    name="fname"
                                                    value="{{ old('fname') }}"
                                                    placeholder="First Name"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mname">Middle Name</label>
                                                <input
                                                    id="mname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mname"
                                                    value="{{ old('mname') }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input
                                                    id="lname"
                                                    class="form-control"
                                                    type="text"
                                                    name="lname"
                                                    value="{{ old('lname') }}"
                                                    placeholder="Last Name"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="sex">Sex</label>
                                                <div class="radio">
                                                    <label for="male">
                                                        <input
                                                            id="male"
                                                            type="radio"
                                                            name="sex"
                                                            value="male"
                                                            required
                                                            {{ old('sex') == 'male' ? 'checked' : '' }}>Male
                                                    </label>
                                                    <label for="female">
                                                        <input
                                                            id="female"
                                                            type="radio"
                                                            name="sex"
                                                            value="female"
                                                            required
                                                            {{ old('sex') == 'female' ? 'checked' : '' }}>Female
                                                    </label>
                                                </div> {{-- .radio --}}
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bdate">Birth Date</label>
                                                <input
                                                    id="bdate"
                                                    class="form-control"
                                                    type="text"
                                                    name="bdate"
                                                    value="{{ old('bdate') }}"
                                                    placeholder="YYYY-MM-DD">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bplace">Birth Place</label>
                                                <input
                                                    id="bplace"
                                                    class="form-control"
                                                    type="text"
                                                    name="bplace"
                                                    value="{{ old('bplace') }}"
                                                    placeholder="Birth Place">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input
                                                    id="address"
                                                    class="form-control"
                                                    type="text"
                                                    name="address"
                                                    value="{{ old('address') }}"
                                                    placeholder="Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="contactno">Contact Number</label>
                                                <input
                                                    id="contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="contactno"
                                                    value="{{ old('contactno') }}"
                                                    placeholder="Contact Number">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="email">E-mail Address</label>
                                                <input
                                                    id="email"
                                                    class="form-control"
                                                    type="email"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    placeholder="E-mail Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="citizenship">Citizenship</label>
                                                <input
                                                    id="citizenship"
                                                    class="form-control"
                                                    type="text"
                                                    name="citizenship"
                                                    value="{{ old('citizenship') }}"
                                                    placeholder="Citizenship">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="civilstatus">Civil Status</label>
                                                <div class="radio">
                                                    <label for="single">
                                                        <input
                                                            id="single"
                                                            type="radio"
                                                            name="civilstatus"
                                                            value="single"
                                                            required
                                                            {{ old('civilstatus') == 'single' ? 'checked' : '' }}>Single
                                                    </label>
                                                    <label for="married">
                                                        <input
                                                            id="married"
                                                            type="radio"
                                                            name="civilstatus"
                                                            value="married"
                                                            required
                                                            {{ old('civilstatus') == 'married' ? 'checked' : '' }}>Married
                                                    </label>
                                                    <label for="separated">
                                                        <input
                                                            id="separated"
                                                            type="radio"
                                                            name="civilstatus"
                                                            value="separated"
                                                            required
                                                            {{ old('civilstatus') == 'separated' ? 'checked' : '' }}>Separated
                                                    </label>
                                                    <label for="widow">
                                                        <input
                                                            id="widow"
                                                            type="radio"
                                                            name="civilstatus"
                                                            value="widow"
                                                            required
                                                            {{ old('civilstatus') == 'widow' ? 'checked' : '' }}>Widow
                                                    </label>
                                                </div> {{-- .radio --}}
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <input
                                                    id="religion"
                                                    class="form-control"
                                                    type="text"
                                                    name="religion"
                                                    value="{{ old('religion') }}"
                                                    placeholder="Religion">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                        <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Student's Father Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="father_fname">First Name</label>
                                                <input
                                                    id="father_fname"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_fname"
                                                    value="{{ old('father_fname') }}"
                                                    placeholder="First Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="father_mname">Middle Name</label>
                                                <input
                                                    id="father_mname"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_mname"
                                                    value="{{ old('father_mname') }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="father_lname">Last Name</label>
                                                <input
                                                    id="father_lname"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_lname"
                                                    value="{{ old('father_lname') }}"
                                                    placeholder="Last Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="father_occupation">Occupation</label>
                                                <input
                                                    id="father_occupation"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_occupation"
                                                    value="{{ old('father_occupation') }}"
                                                    placeholder="Occupation">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="father_contactno">Contact Number</label>
                                                <input
                                                    id="father_contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_contactno"
                                                    value="{{ old('father_contactno') }}"
                                                    placeholder="Contact Number">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                        <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Student's Mother Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mother_fname">First Name</label>
                                                <input
                                                    id="mother_fname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_fname"
                                                    value="{{ old('mother_fname') }}"
                                                    placeholder="First Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mother_mname">Middle Name</label>
                                                <input
                                                    id="mother_mname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_mname"
                                                    value="{{ old('mother_mname') }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mother_lname">Last Name</label>
                                                <input
                                                    id="mother_lname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_lname"
                                                    value="{{ old('mother_lname') }}"
                                                    placeholder="Last Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mother_occupation">Occupation</label>
                                                <input
                                                    id="mother_occupation"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_occupation"
                                                    value="{{ old('mother_occupation') }}"
                                                    placeholder="Occupation">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mother_contactno">Contact Number</label>
                                                <input
                                                    id="mother_contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_contactno"
                                                    value="{{ old('mother_contactno') }}"
                                                    placeholder="Contact Number">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('student.index') }}" class="btn btn-block btn-default">Cancel</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
