@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Contact</div>

          <div class="card-body">
          <div class="d-flex justify-content-center mb-4">
              <img class="profile-picture"
                src="{{ Storage::url($contact->profile_picture) }}">
            </div>
            <form method="POST"
              action="{{ route('contacts.update', $contact->id) }}"
              enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text"
                    class="@error('name') is-invalid @enderror form-control"
                    name="name" required autocomplete="name" value="{{ old('name') ?? $contact->name }}" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number"
                  class="col-md-4 col-form-label text-md-end">Phone Number</label>

                <div class="col-md-6">
                  <input id="phone_number" type="tel"
                    class="@error('phone_number') is-invalid @enderror form-control"
                    name="phone_number" required autocomplete="phone_number" value="{{ old('phone_number') ?? $contact->phone_number}}">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-end">Profile
                  Picture</label>

                <div class="col-md-6">
                  <input id="profile_picture" type="file"
                    class="@error('profile_picture') is-invalid @enderror form-control"
                    name="profile_picture">

                  @error('profile_picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
