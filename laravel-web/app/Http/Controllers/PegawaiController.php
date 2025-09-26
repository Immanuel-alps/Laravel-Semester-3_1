<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data contoh pegawai
        $employee = [
            'employee_name' => 'Immanuel Yosua Silaen',
            'birth_date'    => '2006-11-06',
            'position'      => 'Software Engineer',
            'skills'        => ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'Problem Solving'],
            'join_date'     => '2022-01-10', // contoh tanggal mulai kerja
            'salary'        => 7000000,
            'career_goal'   => 'Menjadi pegawai BUMN di PTPN',
        ];

        // Hitung umur berdasarkan tanggal lahir
        $employee['age'] = Carbon::parse($employee['birth_date'])->age;

        // Hitung lama bekerja dalam hari
        $joinDate = Carbon::parse($employee['join_date']);
        $employee['working_duration'] = $joinDate->diffInDays(Carbon::now());

        // Tentukan status pegawai berdasarkan lama bekerja
        if ($employee['working_duration'] < 730) {
            $employee['status'] = "Masih pegawai baru, tingkatkan pengalaman kerja!";
        } else {
            $employee['status'] = "Sudah senior, jadilah teladan bagi rekan kerja!";
        }

        // Return JSON
        return view('halaman-pegawai',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
