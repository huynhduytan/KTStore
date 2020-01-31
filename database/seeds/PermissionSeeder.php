<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tạo role
        $role_quantri = Role::create(['name' => 'quantri']);
        $role_ketoan = Role::create(['name' => 'ketoan']);
        $role_thukho = Role::create(['name' => 'thukho']);

        //tạo quyền
        $permission_sp_xem = Permission::create(['name' => 'sp_xem']);
        $permission_sp_them = Permission::create(['name' => 'sp_them']);
        $permission_sp_sua = Permission::create(['name' => 'sp_sua']);
        $permission_sp_xoa = Permission::create(['name' => 'sp_xoa']);
        $permission_sp_excel = Permission::create(['name' => 'sp_excel']);
        $permission_sp_print = Permission::create(['name' => 'sp_print']);
        
        $permission_kho_xem = Permission::create(['name' => 'kho_xem']);
        $permission_kho_them = Permission::create(['name' => 'kho_them']);
        $permission_kho_sua = Permission::create(['name' => 'kho_sua']);
        $permission_kho_xoa = Permission::create(['name' => 'kho_xoa']);

        //cấp quyền cho role đã tạo
        $role_quantri->givePermissionTo($permission_sp_xem);
        $role_quantri->givePermissionTo($permission_sp_them);
        $role_quantri->givePermissionTo($permission_sp_sua);
        $role_quantri->givePermissionTo($permission_sp_xoa);
        $role_quantri->givePermissionTo($permission_sp_excel);
        $role_quantri->givePermissionTo($permission_sp_print);

        $role_ketoan->givePermissionTo($permission_sp_print);
        $role_ketoan->givePermissionTo($permission_sp_excel);
        $role_ketoan->givePermissionTo($permission_sp_xem);

        $role_thukho->givePermissionTo($permission_kho_xem);
        $role_thukho->givePermissionTo($permission_kho_them);
        $role_thukho->givePermissionTo($permission_kho_sua);
        $role_thukho->givePermissionTo($permission_kho_xoa);


    }
}
