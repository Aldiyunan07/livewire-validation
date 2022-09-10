<div>
    <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for=""> Nama Lengkap </label>
        <input type="text" wire:model="name" name="name" placeholder="Nama Lengkap" id="" class="form-control @if($errors->has('name')) is-invalid @elseif($name == NULL) @else is-valid @endif">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for=""> Email </label>
        <input type="text" wire:model="email" name="email" placeholder="user@example.com" id="" class="form-control @if($errors->has('email')) is-invalid @elseif($email == NULL) @else is-valid @endif">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for=""> Kata Sandi </label>
        <input type="password" wire:model="password" name="password" id="" class="form-control @if($errors->has('password')) is-invalid @elseif($password == NULL) @else is-valid @endif">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for=""> Ulangi Kata Sandi </label>
        <input type="password" wire:model="password_confirmation" name="password_confirmation" id="" class="form-control @if($errors->has('password_confirmation')) is-invalid @elseif($password_confirmation == NULL) @else is-valid @endif">
        @error('password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"> Submit </button>
    </form>
</div>
