<x-layouts.app>
    <div class="row py-4 mb-3 col-lg-6 col-md-7 col-sm-8">
        <span class="slate">Two factor authentication</span>
        <form action="{{route('password.confirm')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Comfirm your password.</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Confirm password</button>
        </form>
    </div>
</x-layouts.app>
