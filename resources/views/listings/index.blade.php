<x-app-layout>

    <x-hero></x-hero>
    <section class="container px-5 py-12 mx-auto">
        <div class="mb-12">
            <div class="flex-justify-center">
                @foreach($tags as $tag)
                    <a href="{{route('listings.index',['tag' =>$tag->slug])}}"
                      class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase  "
                    >{{$tag->name}}</a>
                @endforeach
            </div>
        </div>
    </section>


</x-app-layout>

