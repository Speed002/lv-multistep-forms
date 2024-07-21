<x-layouts.app>
    <div class="px-3 col-lg-6 col-md-7 col-sm-8">
        <span class="slate">Update profile information</span>
        @if (session('status') === 'profile-information-updated')
        <p class="text-primary-emphasis">Profile information has been updated</p>
        @endif
        <form action="{{route('user-profile-information.update')}}" class="mt-3" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate-light">First name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{auth()->user()->firstname}}">
                @error('firstname')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate-light">Last name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="{{auth()->user()->lastname}}">
                @error('lastname')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate-light">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{auth()->user()->username}}">
                @error('username')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate-light">Telephone <small>(eg.+256...)</small></label>
                <input type="text" class="form-control" name="contact" id="contact" value="{{auth()->user()->contact}}">
                @error('contact')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Email address</label>
                <input type="text" class="form-control" name="email" id="email" value="{{auth()->user()->email}}">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Update</button>
        </form>
        <hr>
        <span class="slate">Change user password</span>
            @if (session('status') === 'profile-information-updated')
                <p class="text-primary-emphasis">Password has been changed</p>
            @endif
        <form action="{{route('user-password.update')}}" class="my-3" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate-light">Current password</label>
                <input type="password" class="form-control" name="current_password" id="current_password">
                @error('current_password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate-light">Password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
                @error('password_confirmation')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <button class="btn btn-light btn-sm slate-light" type="submit">Change password</button>
        </form>
      </div>
</x-layouts.auth>
