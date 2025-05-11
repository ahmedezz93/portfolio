<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqsRequest;
use App\Models\Faq;
use App\Models\FaqSection;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index($id)
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);
        $section = FaqSection::findOrFail($id);
        // Start building the query for Faq model
        $query = Faq::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('question', 'like', '%' . $search . '%');
        }
        // Paginate the filtered query based on perPage value
        $faqs = $query->where('section_id', $section->id)->paginate($perPage);

        return view('admin.faqs.index', compact('faqs', 'section'));
    }

    public function create($id)
    {
         $section = FaqSection::findOrFail($id);
        return view('admin.faqs.create', compact('section'));
    }

    public function store(FaqsRequest $request, $id)
    {
        // البحث عن القسم أو إظهار خطأ 404
        $section = FaqSection::findOrFail($id);
        
        // التحقق من البيانات والتحقق من وجود القيم وإعطاء قيم افتراضية
        $validatedData = $request->validated();
    
        // تحضير البيانات للإدخال
        $data = [
            'section_id' => $section->id,
            'answer' => [
                'en' => $validatedData['answer_en'] ?? '', 
                'ar' => $validatedData['answer_ar'] ?? ''
            ],
            'question' => [
                'en' => $validatedData['question_en'] ?? '', 
                'ar' => $validatedData['question_ar'] ?? ''
            ]
        ];
    
        // إدخال السؤال في قاعدة البيانات
        Faq::create($data);
    
        // إرسال رسالة نجاح
        MessageHelper::getSuccessMessage();
        
        return back();
    }
    
    public function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(FaqsRequest $request, $id)
    {
        // البحث عن السؤال أو إظهار خطأ 404
        $faq = Faq::findOrFail($id);
    
        // التحقق من البيانات وإعطاء قيم افتراضية
        $validatedData = $request->validated();
    
        // تحضير البيانات للتحديث
        $data = [
            'answer' => [
                'en' => $validatedData['answer_en'] ?? '',
                'ar' => $validatedData['answer_ar'] ?? ''
            ],
            'question' => [
                'en' => $validatedData['question_en'] ?? '',
                'ar' => $validatedData['question_ar'] ?? ''
            ]
        ];
    
        // تحديث البيانات في قاعدة البيانات
        $faq->update($data);
    
        // إرسال رسالة نجاح
        MessageHelper::getUpdateMessage();
        
        return back();
    }
    
    public function destroy($id)
    {
        $faq =   Faq::findOrFail($id);
        $faq->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }

    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);
        Faq::whereIn("id", $delete_all)->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }
}
