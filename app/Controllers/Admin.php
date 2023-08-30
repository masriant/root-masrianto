<?php

namespace App\Controllers;

use App\Models\MemberModel;


class Admin extends BaseController
{
    protected $db, $builder;
    protected $memberModel;

    public function __construct()
    {
        
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('users');

        $this->memberModel = new MemberModel();
    
    }
    // ----------------------------------------------------------------------------------------------------- //

    public function index(): string
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        
        $this->builder->select('users.id as userid, username, fullname, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query  = $this->builder->get();
        $data['users']  = $query->getResult();

        return view('admin/index', $data);
    }

    // ----------------------------------------------------------------------------------------------------- //

    public function detail($id = 0)
    {
        $data['title'] = 'Member Details';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, updated_at');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query  = $this->builder->get();
        $data['user']  = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }
    // ----------------------------------------------------------------------------------------------------- //

    public function members()
    {
        $data['title'] = 'User Member List';

        $db       = \Config\Database::connect();
        $builder  = $db->table('member');

        $builder->select('id_member, email, username, slug, name, kelamin, jabatan, instansi, kab_kota, propinsi, partai, whatsapp, refferal, sampul, checkin_at, checkout_at, event, status_event, aktivasi, created_at, updated_at, deleted_at');
        $query  = $builder->get();

        $data['members']  = $query->getResult();
        // $data['user']  = $query->getRow();

        if (empty($data['members'])) {
            return redirect()->to('/admin');
        }

        return view('admin/members', $data);
    }
    // ----------------------------------------------------------------------------------------------------- //

    public function member($slug)
    {
        $data   = [
            'title'         => 'User Details',
            'member'        => $this->memberModel->getMember($slug),
            'validation'    => \Config\Services::validation()
        ];

        if (empty($data['member'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Event Anggota ' . $slug . ' tidak ditemukan.');
        }
        // ----------------------------------------------------------------------------------------------------- //

        // $db       = \Config\Database::connect();
        // $builder  = $db->table('member');

        // $builder->select('id_member, username, jabatan, email, user_image, name, aktivasi');
        // $query  = $builder->get();


        // ----------------------------------------------------------------------------------------------------- //
        // $builder->where('id_member', $id);
        // $query  = $builder->get();
        // $data['member']  = $query->getRow();

        if (empty($data['member'])) {
            return redirect()->to('/admin');
        }

        return view('admin/member', $data);
    }

    public function create()
    {
        $data = [
            'title'     => 'Tambah User Baru',
            //    'member'        => $this->memberModel->getMember($slug),
            'member'        => $this->memberModel->getMember(),
            'validation'    => \Config\Services::validation()
            

            //    ] + ($this->_validasi());
            //    if (!$this->validate([
            //     'username'      => ['rules'=>'required|is_unique[users.username]',
            //     ],
            //     'password1'          => '<PASSWORD>]',
            //     ]) )
            //     {
            //         echo "gagal";
            //         session()->setFlashData("pesan", "<div class='alert alert-danger'>Username sudah terdaftar</div>");
            //         //                            session()->setFlashData(['error'=>"Username sudah terdaftar"]);
            //         //                            session()->setFlashData('error','Username sudah terdaftar!');
            //         session()->setFlashData('pesan','<div class="alert alert-danger" role="alert">Username sudah terdaftar</div
            //         session()->setFlashData("pesan", "<div class='alert alert-danger'>Username sudah terdaftar</div>");
            //         session()->setFlashData("error", "<div class='alert alert-danger'>Username sudah terdaftar</div>");
            //         //                            session()->setFlashData("error", "<div class='alert alert-danger'>Username sudah digunakan</div>");
            //         //                            dd($_POST);
            //         //                        session()->setFlashData("error", "<div class='alert alert-danger'>Username sudah terdaftar</div>");
            //         //                        session()->setFlashData("error", "<div class='alert alert-danger'>Username sudah digunakan</div>");
            //         //                        session()->setFlashData(['error'=>$this->validator]);
            //         //                            return redirect()->back()->withInput();
            //         //                            return redirect()->route('/');
            //         //                            var_dump("berhasil");die;
            //         //                            throw ValidationException::withMessages([
            //             //                                'email'=>"Email sudah terdaftar",
            //             ]);
            //             };
            //             //                die;
            //             $userModel         = new UsersModel();
            //             $simpan            =$userModel->insertUser([
            //                 //'nama_lengkap'    =>$request->getVar('name'),
            //                 /* 'alamat'        =>$request->getVar('address')*/
            //                 'username'       =>$this->request->getPost('username'),
            //                 /*                                    'email'           =>$this->request->getPost('email'), */
            //                 /*                                    'password'   =>$<PASSWORD>('password'), */
            //                 //                                    'password'   => password_<PASSWORD>('<PASSWORD>', PASSWORD_DEFAULT),
            //                 /*                                    'password'   =><PASSWORD>('<PASSWORD>')*/
            //                 /*                                    'password'       => password_hash('<PASSWORD>', PASSWORD_<PASSWORD>), */
            //                 //                                    'password'   =>$<PASSWORD>('password'),
            //                 //                                    'password'   =>$<PASSWORD>('password'),
            //                 //                                    'nohp'           =>$this->request->getPost('phone-number'),
            //                 //                                    'password'   =>$<PASSWORD>('<PASSWORD>')
            //                 //                                    'password'   =><PASSWORD>($this->request->getPost('<PASSWORD>') ),
            //                 //                                    'password'   =>$<PASSWORD>('password'),
            //                 //                                    'password'   =>$<PASSWORD>('<PASSWORD>')
            //                 //                                    'password'   => password_hash($<PASSWORD>('<PASSWORD>') , PASSWORD_<PASSWORD>),
            //                 //                                    'roleId'         =>'2',
            //                 //                                    'password'       => password_<PASSWORD>($<PASSWORD>, PASSWORD_<PASSWORD>),
            //                 //                                        'passwordHash'   => password_hash($this->request->getPost('<PASSWORD>'), PASSWORD_<PASSWORD>),
            //                 //                                    'status'         =>"0",
            //                 //                                    'password'       =><PASSWORD>($this->request->getPost('<PASSWORD>') ),
            //                 //                                        'password'   => password_hash($<PASSWORD>->request->getPost('<PASSWORD>') , PASSWORD_<PASSWORD>),
            //                 //                                    'createdBy'     =>session()->get('id'),
            //                 //                                        'createdBy'      =>session()->get('id'),
            //                 //                                        'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>') ),
            //                 //                                    'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 //                                    'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 //                                    'password'       =><PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 //                                        'password'      => password_hash($<PASSWORD>->getPost('<PASSWORD>'), PASSWORD_<PASSWORD>),
            //                 "password"=> password_hash($this->request->getPost('<PASSWORD>'), PASSWORD_<PASSWORD>),
            //                 /*                                    'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>_password')), */
            //                 //                                        'password'      => password_hash($this->request->getPost('<PASSWORD>'), PASSWORD_<PASSWORD>),
            //                 //                                    'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 //                                    'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 //                                    'password'      =><PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 "password"=>$<PASSWORD>($this->request->getPost('<PASSWORD>_password')),
            //                 //                                        'createdBy'=>'1',
            //                 //                                            'updatedBy'=>'1',
            //                 ],true);
            //                 if ($simpan) {
            //                     session()->setFlashdata(['success' => 'Berhasil Daftar']);
            //                     return redirect()->to(base_url('/login'));
            //                     }else{
            //                         echo view("register/index");
            //                         //                                                var_dump($simpan);die;
            //                         //                                                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            //                         }
            //                         }
            //                         }
            //                         }

        ];

        // if (empty($data['member'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Event Anggota ' . $slug . ' tidak ditemukan.');
        // }

        return view('admin/create', $data);
    }
}
