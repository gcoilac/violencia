<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\report;

class reportController extends Controller
{
    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'participacion' => 'required',
                'name' => 'required',
                'apellido' => 'required',
                'fecha_nac' => 'required',
                'edad' => 'required',
                'estado_civil' => 'required',
                'nro_contacto' => 'required',
                'natural_de' => 'required',
                'domicilio' => 'required',
                'email' => 'required',
                'tipo' => 'required',
                'declaracion' => 'required'
            ]
        );

        $report = new report();

        $report->participacion = $request->participacion;
        $report->name = $request->name;
        $report->apellido = $request->apellido;
        $report->fecha_nac = $request->fecha_nac;
        $report->edad = $request->edad;
        $report->estado_civil = $request->estado_civil;
        $report->nro_contacto = $request->nro_contacto;
        $report->natural_de = $request->natural_de;
        $report->domicilio = $request->domicilio;
        $report->email = $request->email;
        $report->tipo = $request->tipo;
        $report->declaracion = $request->declaracion;

        $report->save();

        return redirect()->route('reports.show', $report);
    }

    public function show(report $report)
    {
        return view('reports.show', compact('report'));
    }

    public function edit(report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, report $report)
    {
        $report->participacion = $request->participacion;
        $report->name = $request->name;
        $report->apellido = $request->apellido;
        $report->fecha_nac = $request->fecha_nac;
        $report->edad = $request->edad;
        $report->estado_civil = $request->estado_civil;
        $report->nro_contacto = $request->nro_contacto;
        $report->natural_de = $request->natural_de;
        $report->domicilio = $request->domicilio;
        $report->email = $request->email;
        $report->tipo = $request->tipo;
        $report->declaracion = $request->declaracion;

        $report->save();

        return redirect()->route('reports.show', $report);
    }
}
