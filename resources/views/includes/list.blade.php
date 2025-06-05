<div class="bg-white p-3 rounded shadow message-box">
  <h5 class="text-center mb-3">Submitted Messages</h5>

  @forelse ($messages as $message)
    <div class="position-relative border-bottom pb-2 mb-3 d-flex">
      <div class="pe-5">
        <strong>{{ $message->name }}</strong>
        <div class="text-muted small">{{ $message->email }}</div>
        <p class="mb-1">{{ $message->message }}</p>
        <small class="text-muted">{{ $message->created_at->format('Y-m-d H:i') }}</small>
      </div>

      <div class="position-absolute top-50 end-0 translate-middle-y me-2 d-flex flex-column align-items-end gap-2">
        <form action="{{ route('form.destroy', $message->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Do you want to delete this message?')" class="btn btn-sm btn-danger">Delete</button>
        </form>

        <a href="{{ route('form.edit', $message->id) }}" class="btn btn-sm btn-primary">Edit</a>
      </div>
    </div>
  @empty
    <p class="text-muted text-center">No messages submitted yet.</p>
  @endforelse
</div>
