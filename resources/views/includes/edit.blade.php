<form action="{{ route('form.update',$message->id) }}" method="POST" style="width: 100%; max-width: 26rem;" class="bg-white p-4 rounded shadow">
    @csrf
    @method('PUT')
    <div class="form-outline mb-3">
        <label class="form-label" for="form4Example1">Name</label>
        <input value="{{ $message->name ?? old('name') }}" name="name" type="text" id="form4Example1" class="form-control" placeholder="Enter your name" />
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-outline mb-3">
        <label class="form-label" for="form4Example2">Email address</label>
        <input value="{{ $message->email ?? old('email') }}" name="email" type="email" id="form4Example2" class="form-control" placeholder="Enter your email" />
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-outline mb-3">
        <label class="form-label" for="form4Example3">Message</label>
        <textarea name="message" class="form-control" id="form4Example3" rows="4" placeholder="Enter your message">{{ $message->message ?? old('message') }}</textarea>
        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100">Save</button>
    <a href="{{route('form')}}" class="btn btn-danger w-100 mt-2">Cancel</a>
</form>