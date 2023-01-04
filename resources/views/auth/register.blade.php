@include('../main/header')


<!--End Navbar-->

<!--Start section-one-->

<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2>أهلا بك فى تسجيل الاشتراك</h2>
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="name" type="text" class="form-control input_use @error('name') is-invalid @enderror" placeholder="اسم المستخدم" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                                </div>

                                <input id="email" type="email" class="form-control input_use @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="a@gmail.com" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control input_pass @error('password') is-invalid @enderror" name="password" placeholder="كلمة السر" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control input_pass" name="password_confirmation" placeholder="تاكيد كلمة السر" required autocomplete="new-password">

                            </div>


                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" class="btn login_btn">
                                        تسجيل الاشترك
                                    </button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('../main/footer')
