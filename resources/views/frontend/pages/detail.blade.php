<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Tour Package</title>
</head>
<body>
    @include('frontend.templates.navbar')
    <div class="container">
        <h1>{{ $items->title }}</h1>
        <p>Description: {{ $items->description }}</p>
        <p>Number of People: {{ $items->num_people }}</p>
        <p>Tour Guide: {{ $items->tour_guide ? 'Available' : 'Not Available' }}</p>
        <p>Duration: {{ $items->duration }}</p>
        <p>Departure Date: {{ $items->departure_date }}</p>
        <p>Price: Rp.{{ $items->price }}</p>
        @if($items->category)
            <p>Category: {{ $items->category->name }}</p>
        @endif
        @if($items->region)
            <p>Region: {{ $items->region->location }}</p>
        @endif
        @if($items->gallery)
            <h3>Gallery</h3>
            <div class="row">
                @foreach($items->gallery as $image)
                    <div class="col-md-4 mb-4">
                        <img src="{{ Storage::url('/' . $image->image) }}" alt="Gallery Image" class="img-fluid" width="150px">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
