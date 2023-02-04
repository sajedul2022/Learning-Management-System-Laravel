<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $check = $user->hasPermissionTo('lead-management');

        if(!$check) {
            flash()->addWarning('You are not authorized to access this page');
            return redirect()->route('dashboard');
        }

        // permission_check('lead-management');

        return view('lead.index');
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {

        return view('lead.edit', [
            'lead_id' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
