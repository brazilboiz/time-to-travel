@extends("tourLayout")

@section("Id")
        {{$tour->id}}
@endsection

@section("Title")
        {{$tour->city}}
@endsection

@section("Country")
        {{$tour->country}}
@endsection

@section("City")
        {{$tour->city}}
@endsection

@section("Short description")
        {{$tour->short_description}}
@endsection

@section("Tour image")
        "{{$tour->image}}"
@endsection

@section("Tour mobile image")
        "{{$tour->image_mob}}"
@endsection

@section("Name description 1")
       {{$tour->name_description_1}}
@endsection

@section("Description 1")
       {{$tour->description_1}}
@endsection

@section("Name description 2")
      {{$tour->name_description_2}}
@endsection

@section("Description 2")
      {{$tour->description_2}}
@endsection

@section("Name description 3")
      {{$tour->name_description_3}}
@endsection

@section("Description 3")
      {{$tour->description_3}}
@endsection

@section("Dates")
    {{$tour->date_from}} - {{$tour->date_to}}
@endsection

@section("Price")
    {{$tour->price}}
@endsection
