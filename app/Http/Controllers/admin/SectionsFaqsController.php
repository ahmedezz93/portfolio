<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\FaqSection;

class SectionsFaqsController extends Controller
{
    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for FaqSection model
        $query = FaqSection::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $sections = $query->paginate($perPage);

        return view('admin.faqsSections.index', compact('sections'));
    }

    public function create()
    {
        return view('admin.faqsSections.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_ar'=>'nullable|string|max:255|required_without:name_en',
            'name_en'=>'nullable|string|max:255|required_without:name_ar'
        ]);
        $data['name'] = [
            'ar' => $request->name_ar,
            'en' => $request->name_en
        ];
        FaqSection::create($data);
        MessageHelper::getSuccessMessage();
        return back();
    }
    public function show(FaqSection $FaqSection)
    {
        return view('FaqSection.show', compact('FaqSection'));
    }

    public function edit($id)
    {
        $section = FaqSection::findOrFail($id);
        return view('admin.faqsSections.edit', compact('section'));
    }
    public function update(Request $request, $id)
    {
        $section    = FaqSection::findOrFail($id);
        $validatedData = $request->validate([
            'name_ar'=>'nullable|string|max:255|required_without:name_en',
            'name_en'=>'nullable|string|max:255|required_without:name_ar'
        ]);
        
        $data['name'] = [
            'ar' => $request->name_ar,
            'en' => $request->name_en
        ];
        $section->update($data);
        MessageHelper::getUpdateMessage();
        return back();
    }

    public function destroy($id)
    {
        $section=   FaqSection::findOrFail($id);
        $section->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);
        FaqSection::whereIn("id", $delete_all)->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }
}
