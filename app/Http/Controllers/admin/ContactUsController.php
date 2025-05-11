<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{

    public function index(){
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Service model
        $query = ContactUs::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        // Paginate the filtered query based on perPage value
        $contacts = $query->paginate($perPage);


        return view('admin.contactUs.index',compact('contacts'));
    }


    public function destroy($id)
    {

        $contact=ContactUs::findOrFail($id);
        $contact->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {

        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Delete the services from the database
        ContactUs::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }

}
