@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="my-3">
                    <h2>Додај нов производ</h2>
                </div>
                <form class="col-8 col-md-6 col-lg-8 mx-auto mb-4" method="POST" action="{{ route('projects.store') }}">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Име</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Поднаслов</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                        @error('subtitle')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img_url" class="form-label">Слика</label>
                        <input type="text" class="form-control" id="img_url" placeholder="http://" name="img_url" value="{{ old('img_url') }}">
                        @error('img_url')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">URL</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="http://" value="{{ old('link') }}">
                        @error('link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Опис</label>
                        <textarea type="text" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Submit</button>
                </form>
            </div>
        </div>
    </main>
@endsection
