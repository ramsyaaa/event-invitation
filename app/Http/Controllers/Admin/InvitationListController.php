<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\InvitationList;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;

class InvitationListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 25;
        $invitationlist = InvitationList::latest()->paginate($perPage);
        $data['invitationlist'] = $invitationlist;
        return view('admin.invitation-list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $data['category'] = CompanyCategory::pluck('category_name', 'id');
        return view('admin.invitation-list.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        InvitationList::create($requestData);
        alert()->success('New ' . 'InvitationList'. ' Created!' );

        return redirect('admin/invitation-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $invitationlist = InvitationList::findOrFail($id);

        return view('admin.invitation-list.show', compact('invitationlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $invitationlist = InvitationList::findOrFail($id);
        $data['invitationlist'] = $invitationlist;
        $data['category'] = CompanyCategory::pluck('category_name', 'id');

        return view('admin.invitation-list.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $invitationlist = InvitationList::findOrFail($id);
        alert()->success('Record Updated!' );
        $invitationlist->update($requestData);

        return redirect('admin/invitation-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        alert()->success('Record Deleted!' );
        InvitationList::destroy($id);

        return redirect('admin/invitation-list');
    }

    public function downloadTemplate()
    {
        $templatePath = public_path('guest-list-template.xlsx');

        if (!file_exists($templatePath)) {
            abort(404, 'Template not found.');
        }

        return response()->download($templatePath);
    }

    public function uploadExcel(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file|mimes:xlsx,csv',
        ]);

        try {
            // Load the uploaded file
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($request->file('import_file')->path());
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();

            foreach ($rows as $index => $row) {
                // Skip the header row
                if ($index === 0) {
                    continue;
                }
                // Assuming 'nim' is unique
                $nim = $row[0];
                $name = $row[1];
                $ttl = $row[2];
                $nik = $row[3];
                $tahun_masuk = $row[4];
                $tahun_lulus = $row[5];
                $ipk_lulus = $row[6];
                $email = $row[7];

                $existingUser = User::where('nim', $nim)->first();
                if ($existingUser) {
                    continue; // Skip to the next row if user already exists
                }

                // Convert 'ttl' to password
                $password = $this->convertTtlToPassword($ttl);
                // Create the user
                $user = User::create([
                    'uuid' => Helper::generateUniqueCode(),
                    'nim' => $nim,
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'role' => 'alumni'
                ]);
                // Create the user's biodata
                $user->biodata()->create([
                    'latest_gpa' => $ipk_lulus,
                    'place_date_of_birth' => $ttl,
                    'graduate_year' => $tahun_lulus,
                    'join_year' => $tahun_masuk,
                    'nik' => $nik,
                ]);
            }

            alert()->success('Guest Lists Imported Successfully' );
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
