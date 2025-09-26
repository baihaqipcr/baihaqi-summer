<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $name = "Azril";
        $birth_date = "2005-06-07";
        $graduation_date = "2027-08-30";
        $hobbies = ["Membaca", "Ngoding", "Bermain game", "Olahraga", "Musik"];
        $current_semester = 5;
        $future_goal = "Menjadi Mahasigma";

        $today = Carbon::now();
        $birth = Carbon::parse($birth_date);
        $grad_date = Carbon::parse($graduation_date);

        $my_age = $today->diffInYears($birth);
        $time_to_study_left = $today->diffInDays($grad_date);

        $semester_info = "";
        if ($current_semester < 3) {
            $semester_info = "Masih Awal, Kejar TAK";
        } else {
            $semester_info = "Jangan main-main, kurang-kurangi main game!";
        }
        $data = [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $graduation_date,
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'semester_info' => $semester_info,
            'future_goal' => $future_goal
        ];

        return response()->json($data);
    }
    public function show(string $param1)
    {
        return view('pegawai');
}
}
