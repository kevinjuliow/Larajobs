<x-layout>

  <!-- Listing Section -->
  <div class="px-20">
      <h2 class="text-lg font-semibold mb-4">Listings</h2>
      @if(count($listings) > 0)
          <ul class="space-y-2">
              @foreach($listings as $listing)
                  <li class="bg-gray-100 rounded-md p-3 flex justify-between items-center">
                      <span>{{$listing->title}}</span>
                      <div class="flex gap-6 pr-10">
                        <a href={{ "/jobs/" . $listing->id . "/edit" }}>
                          <button class="px-2 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit</button>
                        </a>
                         <form action="/jobs/{{ $listing->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
                         </form>
                      </div>
                  </li>
              @endforeach
          </ul>
      @else
          <p>No listings available.</p>
      @endif
  </div>

</x-layout>
