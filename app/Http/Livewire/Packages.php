<?php

namespace App\Http\Livewire;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Livewire\Component;
use App\Models\Package;


class Packages extends Component
{
    public $pacakages , $pacakage_id,$plan_name, $price, $features, $package_duration, $Description, $currency_id ,$status;

    public $updateMode = false;

    public function render()
    {
        $this->pacakages = Package::all();
        return view('livewire.packages');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->updateMode = true;
    }

    private function resetInputFields(){
        $this->features = '';
        $this->price = '';
        $this->package_duration = '';
        $this->Description = '';
        $this->currency_id = '';
        $this->plan_name = '';
        $this->status = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'price' => 'required',
            'features' => 'required',
            'package_duration' => 'required',
            'Description' => 'required',
            'currency_id' => 'required',
            'plan_name' => 'required',
            'status' => 'required',

        ]);

        Package::create($validatedDate);

        session()->flash('message', 'Pacakge Created Successfully.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $pacakages = Package::findOrFail($id);
        $this->pacakage_id = $id;
        $this->plan_name = $pacakages->plan_name;
        $this->price = $pacakages->price;
        $this->features = $pacakages->features;
        $this->package_duration = $pacakages->package_duration;
        $this->Description = $pacakages->Description;
        $this->status = $pacakages->status;
        $this->currency_id = $pacakages->currency_id;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([

            'price' => 'required',
            'features' => 'required',
            'package_duration' => 'required',
            'Description' => 'required',
            'currency_id' => 'required',
            'plan_name' => 'required',
            'status' => 'required',

        ]);

        $Package = Package::find($this->pacakage_id);
        $Package->update([

            'plan_name'  =>$this->plan_name ,
            'price' =>$this->price ,
            'features' =>$this->features ,
            'package_duration' =>$this->package_duration ,
            'Description'=>$this->Description ,
            'currency_id'=> $this->currency_id,
            'status'=> $this->status,


        ]);

        $this->updateMode = false;

        session()->flash('message', 'Pacakge Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Package::find($id)->delete();
        session()->flash('message', 'Package Deleted Successfully.');
    }
}
