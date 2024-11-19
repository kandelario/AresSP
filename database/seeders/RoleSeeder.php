<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Superadmin']);
        $role2 = Role::create(['name' => 'Admin']);
        $role3 = Role::create(['name' => 'Supervisor']);
        $role4 = Role::create(['name' => 'Recuros Humanos']);
        $role5 = Role::create(['name' => 'User']);
        $role6 = Role::create(['name' => 'Almacen']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);
        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);

        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y SUPERVISOR PARA GESTIONAR ASISTENCIAS.
        Permission::create(['name' => 'asistencias.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.destroy'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asistencias.update'])->syncRoles([$role1, $role2, $role3]);

        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y RECURSOS HUMANOS PARA GESTIÓN DE LA ASIGNACIÓN A SERVICIOS DEL PERSONAL.
        Permission::create(['name' => 'assignments.index'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'assignments.create'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'assignments.destroy'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'assignments.update'])->syncRoles([$role1, $role2, $role4]);

        //PERMISOS DE NIVEL SUPERADMIN Y ADMIN PARA LA GESTIÓN DE CLIENTES O SERVICIOS.
        Permission::create(['name' => 'clientes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'clientes.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'clientes.destroy'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'clientes.update'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'inv_export_pdf'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);

        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y ALMACÉN PARA GESTIÓN DE ENTRADAS DE ALMACÉN.
        Permission::create(['name' => 'inventarios.index'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'inventarios.create'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'inventarios.destroy'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'inventarios.update'])->syncRoles([$role1, $role2, $role6]);
        
        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y ALMACÉN PARA GESTIÓN DE SALIDAS DE ALMACÉN.
        Permission::create(['name' => 'salidas.index'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'salidas.create'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'salidas.destroy'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'salidas.update'])->syncRoles([$role1, $role2, $role6]);

        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y ALMACÉN PARA GESTIÓN DE SALIDAS DE ALMACÉN.
        Permission::create(['name' => 'movimientos.index'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'movimientos.create'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'movimientos.destroy'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name' => 'movimientos.update'])->syncRoles([$role1, $role2, $role6]);

        //PERMISOS DE NIVEL SUPERADMIN Y ADMIN PARA LA GESTIÓN DE NÓMINAS.
        Permission::create(['name' => 'nominas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'nominas.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'nominas.destroy'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'nominas.update'])->syncRoles([$role1, $role2]);

        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y RECURSOS HUMANOS PARA GESTIÓN DE PERSONAL Y ASISTENCIAS.
        Permission::create(['name' => 'personals.index'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'personals.create'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'personals.destroy'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'personals.update'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'personals.pase_lista'])->syncRoles([$role1, $role2, $role4]);

        //PERMISOS DE NIVEL SUPERADMIN Y ADMIN PARA LA GESTIÓN DEL MÓDULO DE RAZON SOCIAL.
        Permission::create(['name' => 'razon-socials.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'razon-socials.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'razon-socials.destroy'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'razon-socials.update'])->syncRoles([$role1, $role2]);

        //PERMISOS DE NIVEL SUPERADMIN, ADMIN Y RECURSOS HUMANOS PARA LA GESTIÓN DE LAS SIGLAS REFERENTES A LAS INCIDENCIAS O ASISTENCIAS DEL PERSONAL.
        Permission::create(['name' => 'sigla-asistencias-personals.index'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'sigla-asistencias-personals.create'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'sigla-asistencias-personals.destroy'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'sigla-asistencias-personals.update'])->syncRoles([$role1, $role2, $role4]);

        //PERMISOS DE NIVEL SUPERADMIN Y ADMIN PARA LA GESTIÓN DE LOS TIPOS DE PAGO.
        Permission::create(['name' => 'tipos_pagos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tipos_pagos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tipos_pagos.destroy'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tipos_pagos.update'])->syncRoles([$role1, $role2]);

        //PERMISOS DE NIVEL SUPERADMIN Y ADMIN PARA GESTIÓN DE USUARIOS DE SISTEMA.
        Permission::create(['name' => 'users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.update'])->syncRoles([$role1, $role2]);
    }
}