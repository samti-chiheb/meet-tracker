<?php
namespace App\Controllers;

use App\Core\Form;
use App\Models\RecruitersModel;


class RecruitersController extends Controller
{
  /**
   * show all recruiters registered in database
   * @return void
   */
  public function index() {
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {

      //instantiate model related to recruiters table.
      $recruitersModel = new RecruitersModel;
  
      $userId = $_SESSION['user']['id'];
      //get all recruiters
      $recruiters = $recruitersModel->findBy(['user_id'=>$userId,'archive'=>1]);

      $this->render('recruiters/index', compact('recruiters'));
    }else{
      $_SESSION['error'] = 'you need sign-in or register to access this page !' ;
      header('Location:'.URL.'/users/login');
      exit;
    }
  }
  
  public function view() {
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {

      //instantiate model related to recruiters table.
      $recruitersModel = new RecruitersModel;
  
      $userId = $_SESSION['user']['id'];
      //get all recruiters
      $recruiters = $recruitersModel->findBy(['user_id'=>$userId,'archive'=>1]);

      $this->run('recruiters/index', compact('recruiters'));
    }else{
      $_SESSION['error'] = 'you need sign-in or register to access this page !' ;
      header('Location:'.URL.'/users/login');
      exit;
    }
  }

  public function add(){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      if(Form::validate($_POST, ['recruiter-name', 'email', 'phone'])){
        $recruiterName = strip_tags($_POST['recruiter-name']) ;
        $phone = strip_tags($_POST['phone']) ;
        $email = strip_tags($_POST['email']) ;
        $recruiterDesc = strip_tags($_POST['recruiter-descritption']) ;
    
        // to do select or creat note related to recruiters 
        // $recruiterNote = strip_tags($_POST['recruiterNote']) ;
    
        $recruiter = new RecruitersModel;
        $recruiter->setName($recruiterName)
                  ->setPhone($phone)
                  ->setEmail($email)
                  ->setDescription($recruiterDesc)
                  ->setUser_id($_SESSION['user']['id'])
                  ;
                  $recruiter->create();
                  header('location: '.$_SERVER['HTTP_REFERER']);
                  exit;
      }
    }
  }

  public function update(int $id){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {

      $recruitersModel = new RecruitersModel;
      $recruiter = $recruitersModel->find($id);

      if(Form::validate($_POST, ['recruiter-name', 'email', 'phone'])){
        $recruiterName = strip_tags($_POST['recruiter-name']) ;
        $phone = strip_tags($_POST['phone']) ;
        $email = strip_tags($_POST['email']) ;
        $recruiterDesc = strip_tags($_POST['recruiter-description']) ;
    
        $updatedRecruiter = new RecruitersModel;

        $updatedRecruiter ->setId($recruiter->id)
                          ->setName($recruiterName)
                          ->setPhone($phone)
                          ->setEmail($email)
                          ->setDescription($recruiterDesc)
                          ;
        $updatedRecruiter->update();

        header('location: '.$_SERVER['HTTP_REFERER']);
        exit;
      }
    }
  }

  public function read(int $id) {
    $recruitersModel = new RecruitersModel;
    $recruiter = $recruitersModel->find($id);
    $this->render('recruiters/read', compact('recruiter'));
  }

  public function delete(string $stringId) {
    $ids = explode("-",$stringId) ;
    $recruiter = new RecruitersModel;
    foreach ($ids as $id) {
      $recruiter->delete($id);
    }
    header('Location: '.URL.'/recruiters');
    exit;
  }

  public function archive(string $stringId){

    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      $ids = explode("-", $stringId);
      $recruitersModel = new RecruitersModel;
      $updatedRecruiter = new RecruitersModel;

      foreach ($ids as $id){
        $recruiter = $recruitersModel->find($id);
        $updatedRecruiter ->setId($recruiter->id)
                          ->setArchive(0);
        $updatedRecruiter->update();
      }
      header('location: '.$_SERVER['HTTP_REFERER']);
      exit;
    }
  }

  public function restore(string $stringId){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      $ids = explode("-", $stringId);
      $recruitersModel = new RecruitersModel;
      $updatedRecruiter = new RecruitersModel;
      foreach ($ids as $id){
        $recruiter = $recruitersModel->find($id);
        $updatedRecruiter ->setId($recruiter->id)
                          ->setArchive(1);
        $updatedRecruiter->update();
      }

      header('location: '.$_SERVER['HTTP_REFERER']);
      exit;
    }
  }

  public function records(){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {

      //instantiate model related to recruiters table.
      $recruitersModel = new RecruitersModel;
  
      $userId = $_SESSION['user']['id'];
      //get all recruiters
      $recruiters = $recruitersModel->findBy(['user_id'=>$userId,'archive'=>0]);
      $this->render('recruiters/records', compact('recruiters'));
    }else{
      $_SESSION['error'] = 'you need sign-in or register to access this page !' ;
      header('Location:'.URL.'/users/login');
      exit;
    }
  }

}