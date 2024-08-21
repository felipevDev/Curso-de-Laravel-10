<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSuporteDTO;
use App\DTO\UpdateSuporteDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSuporte;
use App\Models\Suporte;
use App\Services\SuporteService;
use Illuminate\Http\Request;

class SuporteController extends Controller
{

    public function __construct(
        protected SuporteService $service
    )
    {

    }


    public function index(Request $request)
    {
        $suportes = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 15),
            filter: $request->filter,
        );
        return view('admin/suportes/index', compact('suportes'));
    }

    public function show(string $id)
    {
        if (!$suporte = $this->service->findOne($id)) {
            return back();
        }
        return view('admin/suportes/show', compact('suporte'));
    }

    public function create()
    {
        return view('admin/suportes/create');
    }

    public function store(StoreUpdateSuporte $request, Suporte $suporte)
    {
        $this->service->new(CreateSuporteDTO::makeFromRequest($request));

        return redirect()->route('suportes.index');
    }

    public function edit(string $id)
    {
        if (!$suporte = $this->service->findOne($id)) {
            return back();
        }

        return view('admin/suportes/edit', compact('suporte'));
    }

    public function update(StoreUpdateSuporte $request, Suporte $suporte, string $id)
    {
        $suporte = $this->service->update(
            UpdateSuporteDTO::makeFromRequest($request));

        if (!$suporte ) {
            return back();
        }

        return redirect()->route('suportes.index');
    }

    public function destroy(string|int $id)
    {
        $this->service->delete($id);

        return redirect()->route('suportes.index');
    }
}
