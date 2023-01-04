             @include('../main/header')



        <!--End Navbar-->


        <!--Start section-one-->

        <section class="section-one text-center">
            <div class="container">
                <div class="content-me">
                    <h2> أهلا بك فى تفصيل الكتب</h2>
                    <p>" عندما تضيق الحرية فإن الكلام عن المسئولية أقرب إلى أوهام محلقة. "</p>
                    <span>-عبد الله السناوي-</span>
                </div>
            </div>
        </section>

        <!--End section-one-->

        <!--Start main side-->

        <section class="main-side">
            <div class="container text-right">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control " type="search" placeholder="بحث" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0  mr-sm-4" type="submit">بحث</button>
                </form>
                <br>
                <table class="table table  table-striped table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">العنوان</th>
                      <th scope="col">الكاتب</th>
                      <th scope="col">الناشر</th>
                      <th scope="col">رقم الاصدار</th>
                      <th scope="col">الصور</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>php </td>
                      <td>انس</td>
                      <td>عمر</td>
                      <td>111232632</td>
                      <td><img src="{{ asset('img/computer/17.jpg')}}" width="60px" height="90px"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td> ++c</td>
                        <td>محمد</td>
                        <td>يوسف</td>
                        <td>111232632</td>
                        <td><img src="{{ asset('img/computer/16.jpg')}}" width="60px" height="90px"></td>
                      </tr>

                  </tbody>
                </table>
              </div>
        </section>

        <!--End main side-->

        @include('../main/footer')
