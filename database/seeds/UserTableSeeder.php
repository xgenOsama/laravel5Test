<?php
use Illuminate\Database\Seeder;
use App\User;
  class UserTableSeeder extends  Seeder{
      
      public  function  run(){
          $user = new User;
          $user->username = 'osama';
          $user->email = 'osama@example.com';
          $user->password = bcrypt('osama');
          $user->save();
      }
  }