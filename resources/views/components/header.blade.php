<header class="bg-warning">
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="{{ route('index') }}" id="logo" class="text-uppercase text-center text-decoration-none text-dark fw-bold mx-auto d-none d-md-block">
                <img style="width: 50px" src="{{ asset('/images/logo_footer_black.png') }}" alt="image logo" class="d-block mx-auto">brainster
            </a>

            <a href="{{ route('index') }}" id="logo" class="text-uppercase text-center text-decoration-none text-dark fw-bold mx-auto d-block d-md-none">
                <img style="width: 50px" src="{{ asset('/images/logo_footer_black.png') }}" alt="image logo" class="d-block mx-auto">brainster
            </a>

            <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 text-md-center">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://brainster.co/full-stack/">Академија за програмирање</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://brainster.co/marketing/">Академија за маркетинг</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://brainster.co/graphic-design/">Академија за дизајн</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://blog.brainster.co/">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Вработи наши студенти
                        </a>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Вработи наши студенти</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <p class="mb-4 mt-2 text-muted">Внесете ваши информации за да стапиме во контакт:</p>
                                        <form class="" method="POST" action="{{ route('contact') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">E-мејл</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Телефон</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="company" class="form-label">Компанија</label>
                                                <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}">
                                                @error('company')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-warning w-100">Испрати</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-secondary bg-light btn" href="{{ route('login') }}">Најави се</a>
                    </li>
                @endguest
                
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="nav-link text-secondary bg-light btn w-100" type="submit">Одјави се</button>
                        </form>
                    </li>
                @endauth
                
                </ul>
            </div>
        </div>
    </nav>
</header>
