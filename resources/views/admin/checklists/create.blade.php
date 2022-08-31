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

                <form action="{{ route('admin.checklist_groups.checklists.store', $checklistGroup) }}" method="POST">
                    @csrf

                <div class="card-header">{{ __('New Checklist in') }} {{ $checklistGroup->name }}</div>

                <div class="card-body">

                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" for="inputAddress">{{ __('Name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="{{ __('Checklist name') }}">
                          </div>
                    </div>
                    <div class="row mt-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
