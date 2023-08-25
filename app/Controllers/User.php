<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('users');
    }
    // ----------------------------------------------------------------------------------------------------- //
    public function index(): string
    {
        // $data['title'] = 'My Profile';
        // return view('user/index', $data);

        $data['title'] = 'My Profile';
        

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, created_at, updated_at');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $this->builder->where('users.id', $id);
        $query  = $this->builder->get();

        $data['user']  = $query->getRow();

        if(empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('user/index', $data);
    }

    
}
