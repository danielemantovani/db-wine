@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 pt-5">Modify Page</h1>

    <div class="container">
        @include('partials.error')
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
            <div class="col-12 mb-3">
                <label for="aromas" class="form-label">Aromas</label>
                <div class="d-flex gap-2">
                    <select type="select" multiple class="form-select" id="aromas" name="aromas[]">
                        @foreach ($aromas as $aroma)
                            @if (old('aromas') !== null)
                                <option @selected(in_array($aroma->id, old('aromas', []))) value="{{ $aroma->id }}"> {{ $aroma->aromas }}
                                </option>
                            @else
                                <option @selected($wine->aromas->contains($aroma)) value="{{ $aroma->id }}"> {{ $aroma->aromas }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $wine->location }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $wine->image }}">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('wines.index') }}" class="btn btn-outline-primary" title="Indietro"><i
                        class="fa-solid fa-square-caret-left"></i></a>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    @endsection
