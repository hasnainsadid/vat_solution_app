<div class="dropdown">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
        <i class="icon-base ti tabler-dots-vertical"></i>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item waves-effect" href="{{ route('products.show', $product->id) }}"><i
                class="icon-base ti tabler-eye me-1"></i> View</a>

        <a class="dropdown-item waves-effect" href="{{ route('products.edit', $product->id) }}"><i
                class="icon-base ti tabler-pencil me-1"></i> Edit</a>
        <a class="dropdown-item waves-effect" onclick="document.getElementById('delete-{{ $product->id }}').submit();"
            href="javascript:void(0);">
            <i class="icon-base ti tabler-trash me-1"></i> Delete
        </a>
        <form id="delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post"
            class="d-none">
            @csrf
            @method('delete')
        </form>

    </div>
</div>
