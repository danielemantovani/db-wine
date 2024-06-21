@extends('layouts.app')

@section('content')
    <h1 class="text-center">Creation Page</h1>
    <div class="container">
        <form action=" {{ route('wines.store') }} " method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="winery" class="form-label">Winery</label>
                <input type="text" class="form-control" id="winery" name="winery">
            </div>
            <div class="mb-3">
                <label for="wine" class="form-label">Wine</label>
                <input type="text" class="form-control" id="wine" name="wine">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
