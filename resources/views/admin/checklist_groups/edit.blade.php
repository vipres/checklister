@extends('layouts.app')

@section('content')
<div class="row">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.checklist_groups.update', $checklistGroup) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="card-header">{{ __('Edit Checklist Group') }}</div>

                <div class="card-body">


                        <div class="col-12">
                            <label class="form-label" for="inputAddress">{{ __('Name') }}</label>
                            <input class="form-control" value="{{ $checklistGroup->name }}" type="text" name="name" id="name">
                          </div>


                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">{{ __('Update') }}</button>
                </div>
                </form>
                <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"
                onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
