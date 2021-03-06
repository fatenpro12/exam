@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Unit') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('unit.update',$unit) }}">
                        @csrf
@method('put')
<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="unit_name" type="text" value="{{$unit->name}}" class="form-control @error('unit_name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

        @error('unit_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Discripion') }}</label>

    <div class="col-md-6">
        <textarea id="description" value="{{old('description')}}" class="form-control" name="descroption">{{$unit->descroption}}</textarea>
    </div>
</div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
