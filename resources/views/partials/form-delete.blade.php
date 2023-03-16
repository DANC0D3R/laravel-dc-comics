<form action="{{ route('comics.destroy', $comic) }}" method="POST"
onsubmit="return confirm('Confermi di voler eliminare il record {{ $comic->title }}?')">
    @csrf
    @method('DELETE')
    <button title="delete" type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
</form>