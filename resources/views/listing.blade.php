<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="grid grid-rows-4 grid-flow-col gap-4">
   <div class=" border-[1px] border-black">
    <div  class="border-b-2">
      <a class="text-3xl" href="">{{ $listing->title }}</a> 
      <h2>{{ $listing->tags }}</h2>
    </div>
    <div>
      <p>{{ $listing->description }}</p>
    </div>
   </div>
  </div>
</body>
</html>