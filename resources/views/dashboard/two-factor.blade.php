<x-layouts.app>
    <div class="row py-4 mb-3">
        <span class="slate">Two factor authentication</span>
        <div class="col-sm-4">
            @if (auth()->user()->two_factor_secret)

                <small class="slate-light">2FA has been enabled. Scan the Qr code.</small>
                <div class="my-3">
                    <span>
                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                    </span>
                </div>
                {{-- Disable button --}}
                <form action="{{route('two-factor.disable')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm slate-light" type="submit">Disable 2FA</button>
                </form>
            @else
                <form action="{{route('two-factor.enable')}}" method="post">
                    @csrf
                    <button class="btn btn-light btn-sm slate-light mt-3" type="submit">Enable 2-factor authentication</button>
                </form>
            @endif
        </div>
        <div class="col-sm-8">
            @if (auth()->user()->two_factor_secret)
                <small class="slate-light mt-3">Recovery codes(Copy codes to use when logging in)</small>
                    <ul class="mt-3" style="list-style-type:none; padding:0; margin:0;">
                        @foreach (auth()->user()->recoveryCodes() as $code)
                            <li class="text-light">{{$code}}</li>
                        @endforeach
                    </ul>
            @endif
        </div>
    </div>
</x-layouts.app>
