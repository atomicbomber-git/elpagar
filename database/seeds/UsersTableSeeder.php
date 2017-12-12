<?php

use Illuminate\Database\Seeder;
use App\User;
use App\tampilans;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = new User;
        $User->name = 'admin';
        $User->email = 'admin@example.com';
        $User->password = bcrypt('admin');
        $User->foto = null;
        $User->deskripsi = 'Admin';
        $User->save();

        $tampilan = new tampilans;
        $tampilan->favicon = 'a';
        $tampilan->logo = 'a';
        $tampilan->site_title = 'a';
        $tampilan->site_keyword = 'a';
        $tampilan->site_desc = 'a';
        $tampilan->alamat = 'a';
        $tampilan->no_hp = 'a';
        $tampilan->email = 'a';
        $tampilan->jam_buka = '07:30:00';
        $tampilan->jam_tutup = '17:00:00';
        $tampilan->facebook = 'http://facebook.com';
        $tampilan->twitter = 'http://twitter.com';
        $tampilan->instagram = 'http://instagram.com';
        $tampilan->kesbangpol = 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an';
        $tampilan->save();
    }
}
