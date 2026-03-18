<h2>Edit Character</h2>

<form action="{{ route('characters.update', $character->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $character->name }}"><br>
    <input type="text" name="power" value="{{ $character->power }}"><br>
    <input type="text" name="universe" value="{{ $character->universe }}"><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('characters.index') }}">Cancel</a>