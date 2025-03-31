<x-auth.auth-layout-component>
    @section('title','register')
    @section('content')
    <nav class="topnav navbar navbar-light">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="" id="modeSwitcher" data-mode="light">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div class="wrapper vh-50">
        <div class="row align-items-center h-100">
            <form action="{{ route('send.register') }}" method="POST" class="col-lg-6 col-md-8 col-10 mx-auto">
                @csrf
                <div class="mx-auto text-center my-4">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ request()->url() }}">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-md"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a>
                    <h2 class="my-3">Register</h2>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="first_name" id="firstname" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="last_name" id="lastname" class="form-control">
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword5">New Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword5">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword6">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">Password requirements</p>
                        <p class="small text-muted mb-2"> To create a new password, you have to meet all of the
                            following requirements: </p>
                        <ul class="small text-muted pl-4 mb-0">
                            <li> Minimum 8 character </li>
                            <li>At least one special character</li>
                            <li>At least one number</li>
                            <li>Can’t be the same as a previous password </li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Sign up</button>
            </form>
        </div>
    </div>
    @endsection
</x-auth.auth-layout-component>
