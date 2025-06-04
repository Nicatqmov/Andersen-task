<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Andersen Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>


<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-absolute top-0 start-50 translate-middle-x mt-3" role="alert" style="z-index: 9999; width: 26rem;">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <form action="{{ route('form.store') }}" method="post" style="width: 26rem;" class="bg-white p-4 rounded shadow">
    @csrf
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example1">Name</label>
      <input value='{{old("name")}}' placeholder="Enter your name" name="name" type="text" id="form4Example1" class="form-control" />
      @error('name')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example2">Email address</label>
      <input value='{{old("email")}}' placeholder="Enter your email" name="email" type="email" id="form4Example2" class="form-control" />
      @error('email')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example3">Message</label>
      <textarea placeholder="Enter your message" name="message" class="form-control" id="form4Example3" rows="4">{{old("message")}}</textarea>
      @error('message')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary btn-block w-100">Send</button>
  </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
