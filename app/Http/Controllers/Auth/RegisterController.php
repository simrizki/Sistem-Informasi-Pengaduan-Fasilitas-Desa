<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showVerifyOtpForm()
    {
        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ]);

        $user = User::where('otp', $request->otp)
                    ->where('otp_expiry', '>=', Carbon::now())
                    ->first();

        if ($user) {
            $user->email_verified_at = Carbon::now();
            $user->otp = null;
            $user->otp_expiry = null;
            $user->save();

            return redirect()->route('login')->with('status', 'Email verified successfully. You can now login.');
        }

        return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nik' => ['required', 'string', 'max:16'],
            'phone' => ['required', 'string', 'max:15'],
        ]);
    }

    protected function create(array $data)
    {
        $otp = rand(100000, 999999); // generate OTP
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nik' => $data['nik'] ?? 'default_nik_value',
            'phone' => $data['phone'],
            'otp' => $otp,
            'otp_expiry' => Carbon::now()->addMinutes(10), // set expiry time for OTP
        ]);

        // Send OTP email
        Mail::send('emails.otp', ['otp' => $otp], function($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Your OTP for Registration');
        });

        return $user;
    }

    protected function registered(Request $request, $user)
    {
        return redirect()->route('verify.otp'); // mengarahkan ke halaman verifikasi OTP setelah registrasi
    }
}
