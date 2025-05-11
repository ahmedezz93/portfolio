<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServicesDetailsController extends Controller
{
    public function index($id)
    {
        // Find the service by ID
        $service = Service::find($id);

        // Check if the service exists
        if (!$service) {
            MessageHelper::getDeleteMessage('No Service ');
            return back();
        }

        // Fetch all details associated with the specific service and paginate them
        $serviceDetails = $service->serviceDetails()->paginate(10);

        // Return the view with paginated service details
        return view('admin.services.details', compact('serviceDetails', 'id'));
    }
    // Show the form for creating a new resource
    public function create($id)
    {
        // Find the service by ID
        $service = Service::find($id);

        // Check if the service exists
        if (!$service) {
            MessageHelper::getDeleteMessage('No Service ');
            return back();
        }

        return view('admin.services.create_details', compact( 'id'));
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'service_id' => 'required|exists:services,id', // Ensure the service exists
        ]);

        // Create a new service detail entry
        ServiceDetail::create($request->all());

        // Redirect back to index with success message
        MessageHelper::getSuccessMessage();

        return back();
    }

    // Show the form for editing the specified resource
    public function edit(ServiceDetail $serviceDetail)
    {
        return view('admin.services.edit_details', compact('serviceDetail'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {

        $serviceDetail = ServiceDetail::find($id);
        if (!$serviceDetail) {
            MessageHelper::getDeleteMessage('this service not found');
            return back();
        }
        // Validate the incoming request data
        $data =  $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'service_id' => 'required|exists:services,id',

        ]);
        // Update the service detail entry
        $serviceDetail->update($data);

        // Redirect back to index with success message
        MessageHelper::getUpdateMessage();

        return back();
    }

    // Remove the specified resource from storage
    public function destroy(ServiceDetail $serviceDetail)
    {
        // Delete the service detail
        $serviceDetail->delete();
        // Redirect back to index with success message
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
         $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the services to be deleted
        $ServiceDetail = ServiceDetail::whereIn("id", $delete_all)->delete();
        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }

}
