<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Content;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function dashboard(Request $request): View
    {
        $footer = Content::where('html', 'footer')
                        ->latest()
                        ->first();

        $orders =  Order::with('order_lines')
                  ->where('not_active', false)
                  ->where('user_id', Auth::user()->id)
                  ->get();
        return view('dashboard', compact('orders', 'footer'));
    }
    public function edit(Request $request): View
    {
        $footer = Content::where('html', 'footer')
                        ->latest()
                        ->first();

        return view('profile.edit', [
            'user' => $request->user(),
            'footer'=>$footer,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $footer = Content::where('html', 'footer')
        ->latest()
        ->first();

        // Розділити ім'я та прізвище
        if (strpos($request->name, ' ') !== false) {
            $name_parts = explode(' ', $request->name);
            $last_name = $name_parts[0];
            $first_name = isset($name_parts[1]) ? $name_parts[1] : null;
        } else {
            $first_name = $request->name;
            $last_name = null;
        }

        // Оновити дані користувача
        $request->user()->fill([
        'name' => $first_name,
        'surname'=>$last_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'country' => $request->country,
        ]);

        if ($request->user()->isDirty('email')) {
        $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
