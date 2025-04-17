use Illuminate\Support\Facades\Auth;

protected function redirectTo(){
        return Auth::user()->role === 'dokter' ? '/dokter' : '/home';


    }
