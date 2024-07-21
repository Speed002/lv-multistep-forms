<x-layouts.reset>
    <div class="px-3">
        <form action="{{route('password.update')}}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Resetting password for:</label>
                <input type="email" class="form-control" name="email" id="email" value="{{request()->email}}">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Write new password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label slate">Confirm new password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
                @error('password_confirmation')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <input type="hidden" name="token" value="{{request()->token}}">
            <div class="mb-1">
                <small>
                    <a href="{{route('login')}}" class="small slate-light">Changed your mind: Go back to login</a>
                </small>
              </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Reset password</button>
        </form>
      </div>
</x-layouts.auth>
