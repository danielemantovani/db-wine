@extends('layouts.app')

@section('content')
    <h1 class="text-center">Modify Page</h1>

    <div class="container">
        <form action=" {{ route('wines.update', ['wine' => $wine->id]) }} " method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="winery" class="form-label">Winery</label>
                <input type="text" class="form-control" id="winery" name="winery" value="{{ $wine->winery }}">
            </div>
            <div class="mb-3">
                <label for="wine" class="form-label">Wine</label>
                <input type="text" class="form-control" id="wine" name="wine" value="{{ $wine->wine }}">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $wine->location }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $wine->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
