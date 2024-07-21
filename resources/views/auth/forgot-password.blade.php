<x-layouts.reset>
    <div class="h-100 px-3">
        <form action="{{route('password.request')}}" method="POST">
            @csrf
            @if (session('status'))
            <p class="text-primary-emphasis">{{session('status')}}</p>
            @endif
            <div>
                <label for="exampleFormControlInput1" class="form-label slate">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
          <div class="mb-1">
            <small>
                <a href="{{route('login')}}" class="small slate-light">Go back to login</a>
            </small>
          </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Request reset password link</button>
        </form>
      </div>
</x-layouts.auth>
