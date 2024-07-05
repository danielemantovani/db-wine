@extends('layouts.app')

@section('content')
    <h1 class="text-center">Creation Page</h1>
    <div class="container">
        @include('partials.error')
        <form action=" {{ route('wines.store') }} " method="POST">
            @csrf

            <h1 class="text-center mt-5">Add new wine to the winery</h1>

            <div class="mb-3">
                <label for="winery" class="form-label">Winery</label>
                <input type="text" class="form-control" id="winery" name="winery">
            </div>
            <div class="mb-3">
                <label for="wine" class="form-label">Wine</label>
                <input type="text" class="form-control" id="wine" name="wine">
            </div>
            <div class="col-12 mb-3">
                <label for="aromas" class="form-label">Aromas</label>
                <div class="d-flex gap-2">
                    <select type="select" multiple class="form-select" id="aromas" name="aromas[]">
                        @foreach ($aromas as $aroma)
                            <option @selected(in_array($aroma->id, old('aromas', []))) value="{{ $aroma->id }}"> {{ $aroma->aromas }} </option>
                        @endforeach
                    </select>
                </div>
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

        {{-- Aggiungere pulsante "indietro" --}}


    </div>
@endsection
