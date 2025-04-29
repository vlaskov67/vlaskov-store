<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

class PromoCodeController extends Controller
{
    public function index()
    {
        $promoCodes = PromoCode::all();
        return view('promo_codes.index', compact('promoCodes'));
    }

    public function create()
    {
        return view('promo_codes.create');
    }

    public function store(Request $request)
    {
        $promoCode = PromoCode::create($request->all());
        return redirect()->route('promo-codes.index');
    }

    public function show(PromoCode $promoCode)
    {
        return view('promo_codes.show', compact('promoCode'));
    }

    public function edit(PromoCode $promoCode)
    {
        return view('promo_codes.edit', compact('promoCode'));
    }

    public function update(Request $request, PromoCode $promoCode)
    {
        $promoCode->update($request->all());
        return redirect()->route('promo-codes.index');
    }

    public function destroy(PromoCode $promoCode)
    {
        $promoCode->delete();
        return redirect()->route('promo-codes.index');
    }
}
