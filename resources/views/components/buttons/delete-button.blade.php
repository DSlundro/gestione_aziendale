<div>
    <form method="POST" action="{{ route($route, $id) }}" class="w-full">
        @method('DELETE')
        @csrf
        
        <button type="submit" class="delete" onclick="return confirm(&quot;Confirm delete?&quot;)">
            Elimina
        </button>
    </form>
</div>