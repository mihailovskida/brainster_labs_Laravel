@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main>
        <div class="container" style="height: 600px">
            <div class="row">
                <form class="col-8 col-md-6 my-5 mx-auto mb-5" method="POST" action="{{ route('login.authenticate') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Е-мајл</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Пасворд</label>
                        <input type="password" class="form-control" id="password" name="password">

                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning w-100">Submit</button>
                </form>
            </div>
        </div>
    </main>
@endsection
