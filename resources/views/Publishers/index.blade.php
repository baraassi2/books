@extends('../layouts.app')

@section('content')
<!--End Navbar-->


<!--Start section-one-->

<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2> أهلا بك فى جدول الناشر</h2>
            <p>" عندما تضيق الحرية فإن الكلام عن المسئولية أقرب إلى أوهام محلقة. "</p>
            <span>-عبد الله السناوي-</span>
        </div>
    </div>
</section>

<section class="main-side">
    <div class="container text-right">
        @if ($message = Session::get('success'))
        <div class="alert alert-danger text-right " role="alert">
            <p>{{ $message }}</p>
        </div>
        @endif
        <a class="btn btn-success" href="{{ route('Publishers.create') }}">اضافة ناشر </a>

        <br><br>
        <table class="table table  table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الناشر</th>
                    <th scope="col">تعديل والحذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Publishers as $Publisher)
                <tr>
                    <th scope="row">{{ $Publisher->id }}</th>
                    <td>{{ $Publisher->name_publisher }}</td>
                    <td>
                        <form action="{{ route('Publishers.destroy',$Publisher->id) }}" method="Post">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles publisher">
                                <a class="btn btn-primary" href="{{ route('Publishers.edit',$Publisher->id) }}">تعديل</a>
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger">حذف</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $Publishers->links() !!}
    </div>
</section>

@endsection
