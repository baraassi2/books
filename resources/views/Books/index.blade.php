@extends('../layouts.app')

@section('content')
<!--End Navbar-->


<!--Start section-one-->

<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2> أهلا بك فى جدول كتاب</h2>
            <p>" عندما تضيق الحرية فإن الكلام عن المسئولية أقرب إلى أوهام محلقة. "</p>
            <span>-عبد الله السناوي-</span>
        </div>
    </div>
</section>


<section class="main-side">
    <div class="container text-right">
        @if($message = Session::get('success'))
        <div class="alert alert-danger text-right " role="alert">
            <p>{{ $message }}</p>
        </div>
        @endif
        <a href="{{ route('Books.create') }}" class="btn btn-success btn-sm float-end">اضاف كتاب</a>
        <br><br>
        <table class="table table  table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">صورة الكتاب</th>
                    <th scope="col">اسم الكتاب</th>
                    <th scope="col">رقم الاصدر</th>
                    <th scope="col">اسم الكاتب </th>
                    <th scope="col">اسم الناشر</th>
                    <th scope="col">الجنس</th>
                    <th scope="col">تعديل والحذف</th>
            </thead>
            <tbody>
                @if(count($Book) > 0)

                @foreach($Book as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td><img src="{{ asset('images/' . $row->book_image) }}" width="75" /></td>
                    <td>{{ $row->book_name }}</td>
                    <td>{{ $row->book_id }}</td>
                    <td>{{ $row->Writers }}</td>
                    <td>{{ $row->Publishers }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <form method="post" action="{{ route('Books.destroy', $row->id) }}">

                                @csrf
                                @method('DELETE')
                                <a href="{{ route('Books.edit', $row->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="حذف" />
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
                @endif
            </tbody>
        </table>
        {!! $Book->links() !!}
    </div>
</section>
@endsection
