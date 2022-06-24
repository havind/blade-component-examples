<x-layout>
    <form method="POST" action="/comments/{{ $comment->id }}">
        @csrf
        @method('PATCH')





    </form>
</x-layout>
