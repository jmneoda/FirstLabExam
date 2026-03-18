<h1>Character Dictionary</h1>

@if(session('success'))
    <div style="color: green">{{ session('success') }}</div>
@endif

<a href="{{ route('characters.create') }}">Create character</a>

@foreach($characters as $character)
    <div>
        <h3>{{ $character->name }}</h3>
        <p>{{ $character->power }}</p>
        <p>{{ $character->universe }}</p>

        <a href="{{ route('characters.edit', $character->id) }}">Edit</a>

        <form action="{{ route('characters.destroy', $character->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach