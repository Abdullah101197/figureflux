@extends('settings.edit')
@section('title')
    {{ __('messages.invoice_templates') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/invoice-template.css') }}">
@endsection
@section('section')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <form style="padding: 5%" id="myForm" action={{ route('store.social_media') }} name="form" method="post"
        enctype="multipart/form-data">



        @if ($errors->any())
            <h4 class="alert alert-danger">{{ $errors->first() }}</h4>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @csrf


        <div class="form-row">
            <div class="form-group col-md-3">
                <input type="url" placeholder="url" class="form-control @error('url') is-invalid @enderror"
                    id="url" name="url">
            </div>

            <div class="form-group col-md-2">


                <select name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror">
                    <option value="fab fa-facebook-f">facebook</option>
                    <option value="fab fa-twitter">twitter</option>
                    <option value="fab fa-instagram">instagram</option>
                    <option value="fab fa-linkedin-in">linkedin</option>
                </select>

            </div>

            <div class="col-md-5 ">
                <button type="submit" style="height: 70%;width: 50%; tex"   id="butsave" class="btn btn-primary btn-lg">save</button>
            </div>
        </div>


    </form>

    @isset($socialMedia)
        <table class="table table-bordered">
            <tr>
                <th>Icon</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($socialMedia as $media)
                <tr>
                    <td>{{ $media->url }}</td>
                    <td>                   <a href="{{$media->url}} "><i class="{{ $media->icon }}"></i></a>
                     </td>

                    <td>
                        <form action="{{ route('media.destroy', $media->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endisset


@endsection
