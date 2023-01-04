@include('../main/header')


<!--End Navbar-->

<!--Start section-one-->

<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2>أهلا بك فى تسجيل الدخول</h2>
            <p>
                " نعرف جميعاً أن الفن ليس الحقيقة، إنه كذبة تجعلنا ندرك الحقيقة "
            </p>
            <span>- بابلو بيكاسو-</span>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="img/Home/logo.png" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>


                                <input id="email" type="email" class="form-control input_use @error('email') is-invalid @enderror" placeholder="a@gmail.com" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>


                                <input id="password" type="password" class="form-control input_pass @error('password') is-invalid @enderror" placeholder="كلمة السر" name="password" autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">
                                        تذكر
                                    </label>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" class="btn login_btn">
                                    تسجيل الدخول
                                </button>


                            </div>
                        </form>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('نسيت رقمك السري?') }}
                            </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!--End section-one-->

<!--Start main side-->


<!--Start Aside-->



<!--End main side-->

@include('../main/footer')
