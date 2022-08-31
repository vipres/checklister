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

                <form action="{{ route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist]) }}" method="POST">
                    @csrf
                    @method('PUT')

                <div class="card-header">{{ __('Edit Checklist') }}</div>

                <div class="card-body">

                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" for="inputAddress">{{ __('Name') }}</label>
                            <input value="{{ $checklist->name }}" class="form-control" type="text" name="name" id="name">
                          </div>
                    </div>
                    <div class="row mt-3">
                        <button class="btn btn-primary" type="submit">Submit Checklist</button>
                    </div>
                </form>


                </div>
                <form action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"
                    onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
                    </form>
                    <hr>
                    <h2>{{ __('List of Tasks') }}</h2>
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

                <form action="{{ route('admin.checklist_groups.tasks.store', [$checklist]) }}" method="POST">
                    @csrf





                <div class="card-body">
                    <div class="card-header">{{ __('New Task') }}</div>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" for="inputAddress">{{ __('Name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="{{ __('Task name') }}">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="inputAddress">{{ __('Description') }}</label>
                            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                          </div>
                    </div>
                    <div class="row mt-3">
                        <button class="btn btn-primary" type="submit">Submit Task</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
