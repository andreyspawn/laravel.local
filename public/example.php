<?php

function listUsers ()
{
    $varJson = json_decode(file_get_contents('users.json'));
    foreach ($varJson as $key => $arr) {
        ${$key} = $arr;
    }

    foreach ($users as $user) {
        foreach ($contacts as $contact) {
            foreach ($roles as $role) {
                foreach ($permissions as $permission) {
                    if (($user->id === $contact->user) &&
                        ($user->role === $role->id) &&
                        ($user->permissions === $permission->id)) {

                        echo "$user->name . $role->roleName .
                            $contact->firstName $contact->lastName
                             ----->  $permission->value" . '</br>';

                    }
                }
            }
        }
    }
}

listUsers();
