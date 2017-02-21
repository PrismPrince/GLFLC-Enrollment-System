@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit <strong>{{ $level->description }}</strong>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('level.update', [$level->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                        id="description"
                                        class="form-control"
                                        type="text"
                                        name="description"
                                        value="{{ old('description') ? old('description') : $level->description }}"
                                        placeholder="Description"
                                        required>
                                </div> {{-- .form-group --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('level.show', [$level->id]) }}" class="btn btn-block btn-default">Cancel</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
