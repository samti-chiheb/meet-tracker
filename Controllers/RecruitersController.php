<?php
namespace App\Controllers;

use App\Models\RecruitersModel;

class RecruitersController extends Controller
{

  /**
   * show all recruiters registered in database 
   * @return void
   */
  public function index() {
    //instantiate model related to recruiters table.
    $recruitersModel = new RecruitersModel;

    //get all recruiters
    $recruiters = $recruitersModel->findAll();

    $this->render('recruiters/index', compact('recruiters') );
  }

  public function read(int $id) {
    $recruitersModel = new RecruitersModel;

    //get recruiter by id
    $recruiter = $recruitersModel->find($id);

    $this->render('recruiters/read', compact('recruiter'));

  }
}