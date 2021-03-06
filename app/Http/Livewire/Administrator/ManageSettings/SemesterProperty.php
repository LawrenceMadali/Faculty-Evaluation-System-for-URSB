<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\Semester;
use App\Models\SchoolYear;
use Livewire\WithPagination;

class SemesterProperty extends Component
{
    use WithPagination;

    public $name;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name' => 'required|unique:semesters'
    ];

    public function create()
    {
        $this->validate();

        Semester::create([
            'name' => $this->name
        ]);
        $this->reset();
        $this->resetValidation();
        $this->emit('added');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $sem;

    public function editOpenModal($id)
    {
        $this->sem = $id;
        $sem = Semester::find($this->sem);
        $this->name = $sem->name;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $semester = $this->validate([
            'name' => 'required'
        ]);
        Semester::find($this->sem)->update($semester);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->editModal = false;
        $this->createModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.semester-property',[
            'sems'  => Semester::paginate(5),
        ]);
    }
}
