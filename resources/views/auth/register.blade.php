<x-layouts.auth>
    <div class="h-100 p-3">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">First name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{old('firstname')}}">
                @error('firstname')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Last name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="{{old('lastname')}}">
                @error('lastname')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}">
                @error('username')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Telephone <small>(eg.+256...)</small></label>
                <input type="text" class="form-control" name="contact" id="contact" value="{{old('contact')}}">
                @error('contact')
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
            <div class="">
                <label for="exampleFormControlInput1" class="form-label slate">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
                @error('password_confirmation')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <small>
                    <a href="{{route('login')}}" class="small slate-light">Go back to login!</a>&nbsp;
                </small>
              </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Register</button>
        </form>
      </div>
</x-layouts.auth>
