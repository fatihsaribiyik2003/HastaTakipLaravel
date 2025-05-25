<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    // Hasta kayıt formunu göster
    public function create()
    {
        return view('patients.create');
    }

    // Formdan gelen veriyi kaydet
    public function store(Request $request)
    {
        // Validate (zorunlu alanları kontrol et)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tc_kimlik_no' => 'required|string|max:11|unique:patients,tc_kimlik_no',
            'birth_date' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
        ]);

        // Hasta kaydet
        Patient::create($validated);

        // Başarılı ise yönlendir (istersen farklı sayfaya)
        return redirect()->route('patients.create')->with('success', 'Hasta kaydı başarıyla oluşturuldu.');
    }
}
