<p>{{ $comment }}</p>


<p><a href="/comments/{{ $id }}/edit"><button class="btn btn-default">Edit</button></a></p>

<form action="/comments/{{ $id }}" method="post">
        <p><button class="btn btn-default">Delete</button></p>
    @method('delete')
    @csrf
</form>
