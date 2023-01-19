<form
    class="d-inline"
    onsubmit="return confirm('Confermi di voler eliminare: {{$project->title}} ')"
    action="" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn np-btn delete" href="#"><i class="fa-solid fa-trash"></i></button>
</form>
