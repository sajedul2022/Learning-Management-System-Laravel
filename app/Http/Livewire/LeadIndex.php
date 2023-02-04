<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LeadIndex extends Component{

    public function render(){
        $leads = Lead::paginate(10);
        return view('livewire.lead-index', [
            'leads' => $leads
        ]);
    }

    public function leadDelete($id, FlasherInterface $flasher) {

        // permission check
        $user = Auth::user();
        $check = $user->hasPermissionTo('lead-management');

        if(!$check) {
            flash()->addWarning('You are not authorized to access this page');
            return redirect()->route('dashboard');
        }

        $lead = Lead::findOrFail($id);
        $lead->delete();

        $flasher->addSuccess('Lead deleted successfully');
    }


}
