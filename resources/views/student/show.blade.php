@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading text-capitalize clearfix">
                    {{ $student->fname . ($student->mname == '' ? '' : ' ' . $student->mname) . ' ' . $student->lname }}
                    <a href="{{ route('student.edit', [$student->id]) }}" class="btn btn-primary btn-xs pull-right">Edit</a>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Student Basic Information</legend>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $student->fname }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $student->mname or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $student->lname }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Sex</dt>
                                            <dd class="text-capitalize">{{ $student->sex }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Birth Date</dt>
                                            <dd>{{ $student->bdate }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Birth Place</dt>
                                            <dd class="text-capitalize">{{ $student->bplace }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Address</dt>
                                            <dd class="text-capitalize">{{ $student->address }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $student->contactno }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>E-mail Address</dt>
                                            <dd>{{ $student->email }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Citizenship</dt>
                                            <dd class="text-capitalize">{{ $student->citizenship }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Civil Status</dt>
                                            <dd class="text-capitalize">{{ $student->civilstatus }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Religion</dt>
                                            <dd class="text-capitalize">{{ $student->religion or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Grade Level</dt>
                                            <dd>{{ $student->level->description }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>School Year</dt>
                                            <dd>{{ $student->schoolyear->description }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Student's Father Information</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $student->father_fname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $student->father_mname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $student->father_lname or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Occupation</dt>
                                            <dd class="text-capitalize">{{ $student->father_occupation or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $student->father_contactno or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Student's Mother Information</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $student->mother_fname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $student->mother_mname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $student->mother_lname or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Occupation</dt>
                                            <dd class="text-capitalize">{{ $student->mother_occupation or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $student->mother_contactno or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}
                </div> {{-- .panel-body --}}
            </div> {{-- .panel --}}
        </div> {{-- .col-sm-12 --}}
    </div> {{-- .row --}}
</div> {{-- .container --}}
@endsection
