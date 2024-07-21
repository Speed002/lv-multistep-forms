<x-layouts.reset>
    <div class="h-100 p-3">
        @if (session('status'))
        <p class="text-primary-emphasis">{{session('status')}}</p>
        @endif
        <form action="/two-factor-challenge" method="POST">
            @csrf
            {{-- <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label slate">Enter Code</label>
                  <input type="text" class="form-control">
                  @error('code')
                  <small class="text-danger text-xs">{{$message}}</small>
                  @enderror
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label slate">Recover</label>
                  <input type="text" class="form-control">
                </div>
            </div> --}}

            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Enter Code from the authenticator app</label>
                <input type="text" class="form-control" name="code" id="code">
                @error('code')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <small>
                    <a href="#" class="small slate-light">There is a code in your authenticator app.</a>
                </small>
            </div>
            {{-- <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Enter recovery code</label>
                <input type="text" class="form-control" name="recovery_code" id="recovery_code">
                @error('recovery_code')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div> --}}
          <button class="btn btn-light btn-sm slate-light" type="submit">Continue</button>
        </form>
      </div>
</x-layouts.auth>

