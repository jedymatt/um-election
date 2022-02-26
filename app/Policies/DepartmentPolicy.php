<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Department;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Admin $admin)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\Admin $admin
     * @param \App\Models\Department $department
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Admin $admin, Department $department)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Admin $admin)
    {
        return $admin->is_superadmin;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\Admin $admin
     * @param \App\Models\Department $department
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $admin, Department $department)
    {
        return $admin->is_superadmin;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\Admin $admin
     * @param \App\Models\Department $department
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $admin, Department $department)
    {
        return $admin->is_superadmin;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\Admin $admin
     * @param \App\Models\Department $department
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Admin $admin, Department $department)
    {
        return $admin->is_superadmin;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\Admin $admin
     * @param \App\Models\Department $department
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $admin, Department $department)
    {
        return $admin->is_superadmin;
    }
}
