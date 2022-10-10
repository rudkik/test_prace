<?php


namespace App\Controllers;


use App\Services\Router;

class User
{
    /**
     * @param $data
     */
    public function createUser($data)
    {
        $user = \R::dispense('users');
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        \R::store($user);
        Router::redirect('../users');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUser($id){
        return \R::load( 'users', $id );

    }

    /**
     * @param $id
     */
    public function deleteUser($id){
        \R::exec('DELETE FROM users WHERE id =' . $id['id']);
        Router::redirect('../users');
    }


    /**
     * @return mixed
     */
    public function getUsers(){
        $users = \R::getAll( 'SELECT * FROM users' );
        return $users;
    }

}