<x-layouts.auth>
    <div class="h-100 p-3">
        <form action="{{route('login')}}" method="POST"> 
            @csrf
            @if (session('status'))
            <p class="text-primary-emphasis">{{session('status')}}</p>
            @endif
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Email address or Username</label>
                <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <input type="hidden" name="remember" value="true">
          <div class="mb-3">
            <small>
                <a href="{{route('register')}}" class="small slate-light">Register Here!</a>&nbsp;
                <a href="{{route('password.request')}}" class="small slate-light">Forgot password?</a>
            </small>
          </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Sign in</button>
        </form>
      </div>
</x-layouts.auth>
