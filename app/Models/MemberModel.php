<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['id_member', 'email', 'username', 'slug', 'name', 'kelamin', 'jabatan', 'instansi', 'kab_kota', 'propinsi', 'partai', 'whatsapp', 'refferal', 'sampul', 'checkin_at', 'checkout_at', 'event', 'status_event', 'aktivasi', 'created_at', 'updated_at', 'deleted_at'];


    public function search($keyword)
    {
        // $builder = $this->table('member');
        // $builder->like('post_type', $keyword);
        // return $builder;

        return $this->table('member')->like('name', $keyword)->orLike('kab_kota', $keyword);
    }


    public function getMember($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}