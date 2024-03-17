@props(['tagsCsv'])

@php
    //this will seperate the tags on ',' and crate an array called tags
    $tags = explode(',' , $tagsCsv)
@endphp
<ul class="flex mb-3 font-normal">
@foreach ($tags as $tag)
  <a href="/?tags={{ $tag }}">
    <li>
      <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ $tag }}</span>
    </li>
  </a>
@endforeach
</ul>
