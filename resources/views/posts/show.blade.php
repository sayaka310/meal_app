<x-app-layout>
    <div class="container lg:w-3/4 md:w-4/5 w-11/12 mx-auto my-8 px-8 py-4 bg-white shadow-md">
        <x-flash-message :message="session('notice')" />
        <x-validation-errors :errors="$errors" />
        <article class="mb-2">
            <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                {{ $post->title }}</h2>
            <h3>{{ $post->user->name }}</h3>
            <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                記事作成日:{{ $post->created_at }}
            </p>
            <p class="text-sm mb-2 md:text-base font-normal text-gray-800">
                {{ $post->date_diff }} に投稿
            </p>
            <img src="{{ $post->image_url }}" alt="" class="mb-4">
            <p class="text-gray-700 text-base">{!! nl2br(e($post->body)) !!}</p>
        </article>
        <div>
            @auth
                @if ($like)
                    <form action="{{ route('posts.likes.destroy', [$post, $like]) }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <input type="submit"
                            class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-40 mr-2"
                            value="お気に入り削除">
                        <p class="text-gray-700 font-bold">お気に入り数:{{ $post->likes->count() }}</p>
                    </form>
                @else
                    <form action="{{ route('posts.likes.store', $post) }}" method="POST" class="mt-2">
                        @csrf
                        <input type="submit"
                            class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-40 mr-2"
                            value="お気に入り">
                        <p class="text-gray-700 font-bold">お気に入り数:{{ $post->likes->count() }}</p>
                    </form>
                @endif
            @endauth
            <div class="flex flex-row text-center my-4">
                @can('update', $post)
                    <a href="{{ route('posts.edit', $post) }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">編集</a>
                @endcan
                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false};"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20">
                    </form>
                @endcan
            </div>
        </div>
</x-app-layout>
