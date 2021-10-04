<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class CustomEloquentUserProvider extends EloquentUserProvider
{
   public function validateCredentials(UserContract $user, array $credentials)
   {
       $plain = $credentials['password'];

       if ($plain == $seuModoDeValidacao) {
           return true;
       } else {
           return false;
       }
   }

} 