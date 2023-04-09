<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
        if (!isset($_SESSION['_admin_user'])) {
            sfredirect('/admin/login');
        }
        return view();
    }
}
