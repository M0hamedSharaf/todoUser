<?php

if (!function_exists('getPermissionKeys')) {
    function getPermissionKeys()
    {
        return [
            'create',
            'update',
            'delete',
            'edit',
            'show',
            'index',
        ];
    }
}

if (!function_exists('getPermissionTables')) {
    function getPermissionTables()
    {
        return [
            'teacher',
            'student',
            'group',
            'subject',
        ];
    }
}


if (!function_exists('getPermissionsForView')) {
    function getPermissionsForView()
    {
        $keys = getPermissionKeys();
        $tables = getPermissionTables();

        $permissions = [];
        foreach ($tables as $table) {
            foreach ($keys as $value) {
                $permissions[$table][] = [
                    'key' => $value,
                    'value' => "$value-$table"
                ];
            }
        }
        return $permissions;
    }
}


if (!function_exists('getPermissionsForSeeder')) {
    function getPermissionsForSeeder()
    {
        $keys = getPermissionKeys();
        $tables = getPermissionTables();

        $permissions = [];

        foreach ($tables as $table) {
            foreach ($keys as  $value) {
                $permissions[]['name'] = "$value-$table";
            }
        }
        return $permissions;
    }
}