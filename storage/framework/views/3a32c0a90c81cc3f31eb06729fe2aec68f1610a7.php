<?php echo $__env->make('../main/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
                <form>
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="" class="form-control input_user" value="" placeholder="اسم المستخدم">
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="" class="form-control input_pass" value="" placeholder="كلمة السر">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customControlInline">
                      <label class="custom-control-label" for="customControlInline">تذكر</label>
                    </div>
                  </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                 <button type="button" name="button" class="btn login_btn"><a href="<?php echo e(route('Books_management/table_books')); ?>"> تسجيل دخول </a></button>
                 </div>
                </form>
              </div>

              <div class="mt-4">
                <div class="d-flex justify-content-center links">
                  ليس لديك حساب؟
                        <a href="#" class="ml-2">
                          اشتراك </a>
                </div>
                <div class="d-flex justify-content-center links">
                  <a href="#">نسيت رقمك السري؟</a>
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

    <?php echo $__env->make('../main/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\laraval\login\resources\views/login/login.blade.php ENDPATH**/ ?>