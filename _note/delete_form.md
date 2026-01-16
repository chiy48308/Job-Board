<form method="POST" action="{{route('job.destroy', $job->id}}" onsubmit="return confirm("Are you sure you want to delete it?")>
    @csrf
    @method('DELETE')
    <button
        type="submit"
        class="">
        Delete
    </button>
</form>
