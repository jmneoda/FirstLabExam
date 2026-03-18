<h2>Create Character</h2>

<form action="{{ route('characters.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="power" placeholder="Power"><br>
    <input type="text" name="universe" placeholder="Universe"><br>

    <button type="submit">Add Character</button>
</form>

<a href="{{ route('characters.index') }}">Cancel</a>