<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<x-layout>
  @include('partials._jumbotron')
  @include('partials._searchbar')
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-8">
    @foreach ($listings as $listing)
    
  
    <x-listing-card :listing="$listing"/>
    
    @endforeach
 </div>
</x-layout>
</body>
</html>