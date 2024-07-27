<x-layouts.app>
    <div class="px-3 col-lg-7 col-md-9 col-sm-12">
        <div class="bg-transparent mt-3" style="background-color: rgba(0, 0, 0, 0.3) !important;">
            <span class="slate">Update profile information</span>
            @if (session('status') === 'profile-information-updated')
            <p class="text-primary-emphasis">Profile information has been updated</p>
            @endif
            <form action="{{route('user-profile-information.update')}}" class="mt-3" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label slate">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{auth()->user()->name}}">
                    @error('name')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label slate">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{auth()->user()->username}}">
                    @error('username')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label slate">Telephone <small>(eg.+256...)</small></label>
                    <input type="text" class="form-control" name="contact" id="contact" value="{{auth()->user()->contact}}">
                    @error('contact')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label slate">Email address</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{auth()->user()->email}}">
                    @error('email')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
            <button class="btn btn-light btn-sm slate-light" type="submit">Update</button>
            </form>
        </div>
        <div class="bg-transparent my-3" style="background-color:rgba(0, 0, 0, 0.3) !important;">
            <span class="slate">Change user password</span>
            @if (session('status') === 'profile-information-updated')
                <p class="text-primary-emphasis">Password has been changed</p>
            @endif
            <form action="{{route('user-password.update')}}" class="my-3" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label slate">Current password</label>
                    <input type="password" class="form-control" name="current_password" id="current_password">
                    @error('current_password')
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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label slate">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
                    @error('password_confirmation')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-light btn-sm slate-light" type="submit">Change password</button>
            </form>
        </div>
      </div>
</x-layouts.auth>
