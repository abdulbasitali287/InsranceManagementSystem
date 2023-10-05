<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerDocument;


class CustomerDocumentController extends Controller
{
    

    public function index($customerId)
    {
        // Fetch documents for the specified customer
        $customerDocuments = CustomerDocument::where('customer_id', $customerId)->get();

        return view('customer-documents.index', compact('customerDocuments', 'customerId'));
    }



    
 // store customer documents
 public function store(Request $request, $customerId)
 {
     // Validate the file upload
     $request->validate([
        'file_name' => 'required|string|max:255', // Adjust the validation rules for the file name as needed
        'file_path' => 'required|file|mimes:pdf,doc,docx,jpeg,png|max:2048', // Add more allowed file types as needed
     ]);

     // Store the uploaded file
     if ($request->hasFile('file_path')) {
         $file = $request->file('file_path');
         $fileName = $file->getClientOriginalName();

         $path= $file->store('customer_documents', ['disk' => 'public']);


       

         // Create a new customer document record
         $document = new CustomerDocument([
             'customer_id' => $customerId,
             'file_name' => $request->input('file_name'), // Use the file name entered in the form
             'file_path' => $path,
         ]);

         $document->save();
     }

     return redirect()->route('customer-documents.index', $customerId)->with('success', 'File uploaded successfully');
 }


}
