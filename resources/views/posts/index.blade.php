@extends('layouts.app')

@section('content')
   <div class="flex flex-col">
      @if($posts->count())
         @foreach ($posts as $post)
            <div class="flex gap-3 py-4 border-b border-gray-800 last:border-b-0">
               <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 font-semibold uppercase shrink-0">
                  {{ substr($post->user->name, 0, 1) }}
               </div>
               <div class="flex flex-col gap-1 w-full">
                  <div class="flex items-center gap-2">
                     <span class="font-semibold">{{ $post->user->name }}</span>
                     <span class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                  </div>
                  <p class="text-gray-100">{{ $post->body }}</p>
                  <div class="flex gap-4 mt-2 text-sm text-gray-500">
                     <a href="" class="hover:text-white">Like</a>
                     <a href="" class="hover:text-white">Reply</a>
                  </div>
               </div>
            </div>
         @endforeach
      @else
         <p class="py-8 text-center text-gray-500">No threads yet.</p>
      @endif
   </div>
@endsection