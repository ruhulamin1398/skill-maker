<?php 

use App\Models\fileManager;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\fileManager;
use Illuminate\Http\Request;

use \App\Http\Requests\StorefileManagerRequest;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'File Manager';
        $files = fileManager::latest()->get();

        return view('admin.fileManager.index', compact('page_name','files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $page_name = 'Add New File'; 
        return view('admin.fileManager.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefileManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'         => 'required', 
            'file' => 'required'
        ],[
            'title.required'            => 'Please Enter Title', 
            'file.required'      => 'Please Select file',
        ]);
        

        $file = new fileManager;
        $file->title = $request->title; 

        if ($request->hasFile('file')) {
            $file1 = $request->file('file');
            $extension = $file1->getClientOriginalExtension();
            $fileName = str_replace(' ', '_', $request->title).time() . '.' . $extension;
            $file1->move('files/', $fileName);
            $file->link = $fileName;
        } 
     
 
        $file->save(); 
        return redirect()->route('file-manager.index')->with('success','file added Successful');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function show(fileManager $fileManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function edit(fileManager $fileManager)
    {

         
        $page_name = "Update File";
        return view('admin.fileManager.edit', compact('page_name','fileManager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefileManagerRequest  $request
     * @param  \App\Models\fileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fileManager $fileManager)
    {
 
 
        $fileManager->title = $request->title; 

        if ($request->hasFile('file')) {
            ///renaming old file
            rename('files/'.$fileManager->link, 'files/'.$fileManager->link.'.old');

            $file1 = $request->file('file');
            $file1->move('files/',$fileManager->link);
           
        } 
     
 
        $fileManager->save(); 
        return redirect()->route('file-manager.index')->with('success','file update Successful');

  
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(fileManager $fileManager)
    {
        //
    }
}
