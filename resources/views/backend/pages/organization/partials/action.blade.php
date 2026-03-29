<div class="dropdown">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
        <i class="icon-base ti tabler-dots-vertical"></i>
    </button>
    <div class="dropdown-menu">

        <a class="dropdown-item waves-effect" href="{{ route('organizations.show', $organization->id) }}"><i
                class="icon-base ti tabler-eye me-1"></i> View</a>

        <a class="dropdown-item waves-effect" href="{{ route('organizations.edit', $organization->id) }}"><i
                class="icon-base ti tabler-pencil me-1"></i> Edit</a>
        <a class="dropdown-item waves-effect"
            onclick="document.getElementById('delete-{{ $organization->id }}').submit();" href="javascript:void(0);">
            <i class="icon-base ti tabler-trash me-1"></i> Delete
        </a>
        <form id="delete-{{ $organization->id }}" action="{{ route('organizations.destroy', $organization->id) }}"
            method="post" class="d-none">
            @csrf
            @method('delete')
        </form>

    </div>
</div>
