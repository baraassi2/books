@extends('../layouts.app')

@section('content')
<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2> أهلا بك فى جدول الكاتب</h2>
            <p>" عندما تضيق الحرية فإن الكلام عن المسئولية أقرب إلى أوهام محلقة. "</p>
            <span>-عبد الله السناوي-</span>
        </div>
    </div>
</section>
<section class="main-side">
    <div class="container text-right">
        @if ($message = Session::get('success'))
        <div class="alert alert-success text-right " role="alert">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a class="btn btn-success" href="{{ route('Writers.create') }}">اضاف الكاتب</a>
        <br><br>
        <table class="table table  table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الكاتب</th>
                    <th scope="col">تعديل والحذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Writers as $Writer)
                <tr>
                    <th scope="row">{{ $Writer->id }}</th>
                    <td>{{ $Writer->name_writer }}</td>
                    <td>
                        <form action="{{ route('Writers.destroy',$Writer->id) }}" method="Post">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a class="btn btn-primary" href="{{ route('Writers.edit',$Writer->id) }}">تعديل</a>
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
        {!! $Writers->links() !!}
    </div>
</section>
@endsection
