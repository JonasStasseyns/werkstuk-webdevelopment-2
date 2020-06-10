@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Contentbeheer</h1>
        <h2>{{$contents[0]->page}}</h2>
        @if(isset($_GET['name']))
            <div class="toast">De record '{{$_GET['name']}}' is aangepast.</div>
        @endif
        <div class="edit-form-list">
            @foreach($contents as $content)
                <div class="edit-item">
                    <form action="{{route('admin.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="page" value="{{$content->page}}">
                        <input type="hidden" name="name" value="{{$content->name}}">
                        <label>{{$content->page . ' // ' . $content->name}}
                            <input type="text" name="content_section" value="{{$content->content_section}}">
                        </label>
                        <label>{{$content->page . ' // ' . $content->name . '_nl'}}
                            <input type="text" name="content_section_nl" value="{{$content->content_section_nl}}">
                        </label>
                        <input type="submit" value="Update">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
