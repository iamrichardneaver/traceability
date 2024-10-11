
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesAndPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $roles = [
            'Super Admin',
            'Manager',
            'Staff',
            'Farmer',
            'Consumer',
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert(['name' => $role]);
        }

        // Create permissions
        $permissions = [
            'Access Farm Profile Module',
            'Access Planning Module',
            'Access Production Module',
            'Access Inventory Module',
            'Access Sales Module',
            'Access Accounting Module',
            'Access Quality Control Module',
            'Access Traceability Module',
            'Access CRM Module',
            'Access Analytics and Insights',
            'Access USSD Service',
            'Access API Development',
            'Access Security Measures',
            'Access Deployment and Maintenance',
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->insert(['name' => $permission]);
        }

        // Assign all permissions to Super Admin
        $superAdminRoleId = DB::table('roles')->where('name', 'Super Admin')->first()->id;
        $permissionIds = DB::table('permissions')->pluck('id');

        foreach ($permissionIds as $permissionId) {
            DB::table('role_permission')->insert([
                'role_id' => $superAdminRoleId,
                'permission_id' => $permissionId,
            ]);
        }
    }
}
