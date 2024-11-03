@foreach ($comments as $comment)
<div style="margin-left: 1.6em; margin-top: 1em;">
    <div style="display: grid; grid-template-columns: 1em 1fr; gap: 0.5em; align-items: center">

        <form method="" action="" style="margin: 0; display: inline">
            @csrf
            <input type="submit" class="triangle graytext" value="a"/>
        </form>

        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <span style="font-size: small; color: gray;">{{$comment->user->name}} {{ $comment->created_at }}</span>
            <hr class="bg-white">
            <p class="text-white">{{$comment->text}}</p>
            <div>
                <details>
                    <summary class="py-0 px-1 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reply</summary>
                    
                    <form method="POST" action="/comment/{{ $comment->id }}">
                        @csrf
                        <br><textarea placeholder="Say anything to this user" class="py-0 px-1 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" name="text" rows="8" cols="80" wrap="virtual"></textarea><br>
                        <!-- ! Mirar esto de aquí, que es posible la parte rara el código ! -->
                        <input name="comment_id" value="{{ $comment->id }}" type="hidden" />
                        <input type="submit" value="Answer!" class="py-0 px-1 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" value="" />
                    
                    </form>
                </details>
            </div>
        </div>

        <div>
        </div>

    </div>
</div>
@endforeach