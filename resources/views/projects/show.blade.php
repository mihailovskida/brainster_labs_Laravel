@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <div class="container pb-5">
        <div class="card text-center mb-4 col-lg-5 col-10 col-md-7 mx-auto mt-5" style="height: 450px">
            <img src="{{ $project->img_url }}" class="card-img-top mx-auto my-2 rounded-0"
                alt="image for project" style="width: 150px">
            <div class="card-body text-dark">
                <h5 class="card-title">{{ $project->name }}</h5>
                <p class="card-text text-muted">{{ $project->subtitle }}</p>
                <p class="card-text">{{ $project->description }}</p>
            </div>

            @auth
                <div class="py-2 bg-light d-flex card-footer mt-auto justify-content-center">
                    <a href="{{ route('projects.edit', $project) }}"
                        class="btn btn-warning align-items-center d-flex rounded-0"
                        style="margin: 0px 10px 0px 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg>
                    </a>
                    <button type="button"
                        class="btn btn-danger align-items-center d-flex pl-5 rounded-0"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $project->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M1.5 3a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 0 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4H1.5a.5.5 0 0 1-.5-.5zM5.5 5.5A.5.5 0 0 1 6 5h1a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zM8 5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0V5zM9 5.5A.5.5 0 0 1 9.5 5H11a.5.5 0 0 1 0 1H9.5a.5.5 0 0 1-.5-.5zM3 4v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1z" />
                        </svg>
                    </button>

                    <div class="modal fade" id="staticBackdrop{{ $project->id }}"
                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Избриши</h5>
                                    <button type="button" class="btn-close"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Дали сте сигурни дека сакате да го избришете производот?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Откажи</button>
                                    <form action="{{ route('projects.destroy', $project->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning">Избриши</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </div>
@endsection
