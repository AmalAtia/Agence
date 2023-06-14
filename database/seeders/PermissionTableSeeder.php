<?php

namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'hotel-list',
           'hotel-create',
           'hotel-edit',
           'hotel-delete',
           'omra-list',
           'omra-create',
           'omra-edit',
           'omra-delete',
           'voyage-list',
           'voyage-create',
           'voyage-edit',
           'voyage-delete',
           'vol-list',
           'vol-create',
           'vol-edit',
           'vol-delete',
           'circuit-list',
           'circuit-create',
           'circuit-edit',
           'circuit-delete',
           'suggestion-list',
           'suggestion-create',
           'suggestion-edit',
           'suggestion-delete',
           'reservationomra-list',
           'reservationomra-create',
           'reservationomra-edit',
           'reservationomra-delete',
           'reservationhotel-list',
           'reservationhotel-create',
           'reservationhotel-edit',
           'reservationhotel-delete',
           'reservationvoyage-list',
           'reservationvoyage-create',
           'reservationvoyage-edit',
           'reservationvoyage-delete',
           'reservationvol-list',
           'reservationvol-create',
           'reservationvol-edit',
           'reservationvol-delete',
           'reservationcircuit-list',
           'reservationcircuit-create',
           'reservationcircuit-edit',
           'reservationcircuit-delete',

           
           
           

        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
