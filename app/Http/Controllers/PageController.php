<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function dashboard(Request $request)
{
    $username = $request->input('username');

    return view('dashboard', compact('username'));
}

    public function prosesLogin(Request $request)
{
    $adminUsername = 'admin';
    $adminPassword = 'admin123';

    if ($request->username !== $adminUsername) {
        return back()
            ->withInput()
            ->with('username_error', 'Username yang anda masukkan salah');
    }

    if ($request->password !== $adminPassword) {
        return back()
            ->withInput()
            ->with('password_error', 'Password yang anda masukkan salah');
    }

    session([
        'is_admin' => true,
        'username' => $request->username,
    ]);

    return redirect('/dashboard?username=' . $request->username);
}

public function login()
{
    return view('login');
}

public function logout()
{
    session()->forget(['is_admin', 'username']);

    return redirect('/');
}

    public function profile(Request $request)
{
    $username = $request->input('username');

    return view('profile', compact('username'));
}

    public function pengelolaan()
{
    $kostum = [
        ['nama' => 'Rem Re:Zero', 'kategori' => 'Anime', 'harga' => 150000],
        ['nama' => 'Kobo Kanaeru', 'kategori' => 'Vtuber', 'harga' => 200000],
        ['nama' => 'Hu Tao', 'kategori' => 'Game', 'harga' => 175000],
        ['nama' => 'Nezuko', 'kategori' => 'Anime', 'harga' => 120000],
        ['nama'=> 'Hololive Ayunda Risu', 'kategori' => 'Vtuber', 'harga' => 190000],
        ['nama'=> 'Ai Hoshino Idol Dress', 'kategori' => 'Anime', 'harga' => 200000],
        ['nama'=> 'Ada Wong Resident Evil', 'kategori' => 'Game', 'harga' => 180000],
        ['nama'=> 'One Piece Luffy Gear 5', 'kategori' => 'Anime', 'harga' => 170000],
    ];

    return view('pengelolaan', compact('kostum'));
}

public function kontak()
{
    return view('kontak');
}

    public function katalog()
{
    $kostums = [
        [
            'nama' => 'Rem Re:Zero Maid Dress',
            'kategori' => 'Anime',
            'harga' => 150000,
            'gambar' => 'image/rem.jpg',
        ],
        [
            'nama' => 'Hololive Kobo Kanaeru',
            'kategori' => 'Vtuber',
            'harga' => 200000,
            'gambar' => 'image/Kobo Kanaeru.jpg',
        ],
        [
            'nama' => 'Genshin Impact Hu Tao',
            'kategori' => 'Game',
            'harga' => 175000,
            'gambar' => 'image/hu tao.jpg',
        ],
        [
            'nama' => 'Demon Slayer Nezuko',
            'kategori' => 'Anime',
            'harga' => 120000,
            'gambar' => 'image/Nezuko.jpg',
        ],
        [
            'nama' => 'Hololive Ayunda Risu',
            'kategori' => 'Vtuber',
            'harga' => 190000,
            'gambar' => 'image/Ayunda Risu.jpg',
        ],
        [
            'nama' => 'Ai Hoshino Idol Dress',
            'kategori' => 'Anime',
            'harga' => 200000,
            'gambar' => 'image/Ai Hoshino.jpg',
        ],
        [
            'nama' => 'Ada Wong Resident Evil',
            'kategori' => 'Game',
            'harga' => 170000,
            'gambar' => 'image/Ada Wong.jpg',
        ],
        [
            'nama' => 'One Piece Luffy Gear 5',
            'kategori' => 'Anime',
            'harga' => 180000,
            'gambar' => 'image/Luffy Gear 5.jpg',
        ],

    ];

    return view('katalog', compact('kostums'));
}

}

