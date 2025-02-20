<?php

namespace App\Livewire\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use App\Models\CnfgModules;
use App\Models\CnfgComponents;

class PermissionModal extends Component
{
    public $name;
    public $module_name;  // Add this line to define module_name
    public $component_name;


    public Permission $permission;

    protected $rules = [
        'name' => 'required|string',
        'module_name' => 'required',
        'component_name' => 'required',
    ];

    // This is the list of listeners that this component listens to.
    protected $listeners = [
        'modal.show.permission_name' => 'mountPermission',
        'delete_permission' => 'delete'
    ];

    public function render()
    {
        // $modules = CnfgModules::getModules();
        // $components = CnfgComponents::getComponents();
        return view('livewire.permission.permission-modal');
    }

    public function mountPermission($permission_name = '')
    {
        if (empty($permission_name)) {
            // Create new
            $this->permission = new Permission;
            $this->name = '';
            $this->module_name = ''; // Set default empty value for module_name
            $this->component_name = ''; // Set default empty value for module_name

            return;
        }

        // Get the role by name.
        $permission = Permission::where('name', $permission_name)->first();
        if (is_null($permission)) {
            $this->dispatch('error', 'The selected permission [' . $permission_name . '] is not found');
            return;
        }

        $this->permission = $permission;
        $this->name = $this->permission->name;
        $this->module_name = $this->permission->module_name ?? '';
        $this->component_name = $this->permission->component_name ?? ''; // Assuming this field exists
    }

    public function submit()
    {
        $this->validate();


        $this->permission->name = strtolower($this->name);
        $this->permission->module_id = $this->module_name;
        $this->permission->component_id = $this->component_name;

        if ($this->permission->isDirty()) {
            $this->permission->save();
        }

        // Emit a success event with a message indicating that the permissions have been updated.
        $this->dispatch('success', 'Permission updated');
    }

    public function delete($name)
    {
        $permission = Permission::where('name', $name)->first();

        if (!is_null($permission)) {
            $permission->delete();
        }

        $this->dispatch('success', 'Permission deleted');
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
