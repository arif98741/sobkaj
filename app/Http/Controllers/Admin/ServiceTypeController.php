<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'service_types' => ServiceType::orderBy('type_name')->paginate(env('PER_PAGE_DEFAULT'))
        ];

        return view('admin.service-type.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.service-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $data = $this->validateRequest();
        if (ServiceType::create($data)) {

            Session::flash('success', 'Service Type Added successfully!');
            return redirect(route('admin.service-type.index'));
        } else {
            Session::flash('error', 'Failed to save service type!');
            return redirect(route('admin.service-type.create'));
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param ServiceType $serviceType
     * @return void
     */
    public function edit(ServiceType $serviceType)
    {

        $data = [
            'service_type' => $serviceType
        ];

        return view('admin.service-type.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceType $serviceType
     * @return void
     */
    public function update(Request $request, ServiceType $serviceType)
    {
        $serviceType->type_name = $request->type_name;
        if ($serviceType->save()) {

            Session::flash('success', 'Service Type Updated successfully!');
            return redirect(route('admin.service-type.index'));
        } else {
            Session::flash('error', 'Failed to update service type!');
            return redirect(route('admin.service-type.create'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(ServiceType $serviceType)
    {
        if ($serviceType->delete()) {

            Session::flash('success', 'Service Type deleted successfully!');
            return redirect(route('admin.service-type.index'));
        } else {
            Session::flash('error', 'Failed to delete service type!');
            return redirect(route('admin.service-type.index'));
        }
    }

    /**
     * validation data
     * @return array
     */
    private function validateRequest(): array
    {
        return request()->validate([
            'type_name' => 'required|unique:service_types|min:3|max:100',
        ]);
    }
}
