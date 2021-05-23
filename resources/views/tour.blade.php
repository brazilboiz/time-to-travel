@extends("tourLayout")

@section("Title")
    @foreach($tour as $data)
        {{$data->city}}
    @endforeach
@endsection

@section("Country")
    @foreach($tour as $data)
        {{$data->country}}
    @endforeach
@endsection

@section("City")
    @foreach($tour as $data)
        {{$data->city}}
    @endforeach
@endsection

@section("Short description")
    @foreach($tour as $data)
        {{$data->short_description}}
    @endforeach
@endsection

@section("Tour image")
    @foreach($tour as $data)
        "{{$data->image}}"
    @endforeach
@endsection

@section("Tour mobile image")
    @foreach($tour as $data)
        "{{$data->image_mob}}"
    @endforeach
@endsection

@section("Name description 1")
    @foreach($tour as $data)
        {{$data->name_description_1}}
    @endforeach
@endsection

@section("Description 1")
    @foreach($tour as $data)
        {{$data->description_1}}
    @endforeach
@endsection

@section("Name description 2")
    @foreach($tour as $data)
        {{$data->name_description_2}}
    @endforeach
@endsection

@section("Description 2")
    @foreach($tour as $data)
        {{$data->description_2}}
    @endforeach
@endsection

@section("Name description 3")
    @foreach($tour as $data)
        {{$data->name_description_3}}
    @endforeach
@endsection

@section("Description 3")
    @foreach($tour as $data)
        {{$data->description_3}}
    @endforeach
@endsection

@section("Dates")
    @foreach($tour as $data)
        {{$data->date_from}} - {{$data->date_to}}
    @endforeach
@endsection

@section("Price")
    @foreach($tour as $data)
        {{$data->price}}
    @endforeach
@endsection

