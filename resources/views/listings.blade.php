<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @extends('nav')
  @section('content')
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-screen-lg mx-auto">
    @foreach ($listings as $listing)
    <div class="border-[1px] border-black min-h-[100px] max-h-[240px] bg-gray-200 p-4">
     <div class="border-b-2">
       <a class="text-3xl" href={{ "/jobs/" . $listing->id }}>{{ $listing->title }}</a> 
       <h2>{{ $listing->tags }}</h2>
     </div>
     <div class="min-h-[100px] max-h-[200px] bg-gray-200 p-4">
       <p>{{ $listing->description }}</p>
     </div>
    </div>
    @endforeach
 </div>
  @endsection
 
</body>
</html>