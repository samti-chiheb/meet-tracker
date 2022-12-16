<?php
namespace App\Controllers;

use App\Core\Form;
use App\Models\ClientsModel;
use App\Models\RecruitersModel;

class ClientsController extends Controller{

  public function index() {
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      $clientsModel = new ClientsModel;
      $recruitersModel = new RecruitersModel;
      $userId = $_SESSION['user']['id'];
      // get clients
      $clients = $clientsModel->findBy(['user_id'=>$userId,'archive'=>1]);
      // get recruiters
      $recruiters = $recruitersModel->findBy(['user_id'=>$userId]);
      // join
      $recruitersJoin = $clientsModel->join('recruiters', " clients.recruiter_id=recruiters.id WHERE clients.user_id=$userId");
      $this->render('clients/index', compact('clients','recruiters' ,'recruitersJoin'));
    }else{
      $_SESSION['error'] = 'you need sign-in or register to access this page !' ;
      header('Location:'.URL.'/users/login');
      exit;
    }
  }

  public function view(){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      $clientsModel = new ClientsModel;
      $recruitersModel = new RecruitersModel;
      $userId = $_SESSION['user']['id'];
      // get clients
      $clients = $clientsModel->findBy(['user_id'=>$userId,'archive'=>1]);
      // get recruiters
      $recruiters = $recruitersModel->findBy(['user_id'=>$userId]);
      // join
      $recruitersJoin = $clientsModel->join('recruiters', " clients.recruiter_id=recruiters.id WHERE clients.user_id=$userId");
 
      $this->run('clients/index', compact('clients','recruiters' ,'recruitersJoin'));
    }else{
      $_SESSION['error'] = 'you need sign-in or register to access this page !' ;
      header('Location:'.URL.'/users/login');
      exit;
    }
  }

  public function add(){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      if(Form::validate($_POST, ['client-name', 'email', 'phone', 'recruiter-id'])){
        $clientName = strip_tags($_POST['client-name']) ;
        $phone = strip_tags($_POST['phone']) ;
        $email = strip_tags($_POST['email']) ;
        $clientDesc = strip_tags($_POST['client-descritption']) ;
        $recruiterId = strip_tags($_POST['recruiter-id']) ;
    
        // to do select or creat note related to clients 
        // $clientNote = strip_tags($_POST['clientNote']) ;
    
        $client = new ClientsModel;
        $client->setName($clientName)
                  ->setPhone($phone)
                  ->setEmail($email)
                  ->setDescription($clientDesc)
                  ->setRecruiter_id($recruiterId)
                  ->setUser_id($_SESSION['user']['id'])
                  ;
                  $client->create();
                  header('location: '.$_SERVER['HTTP_REFERER']);
                  exit;
      }
    }
  }

  public function update(int $id){
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {

      $clientsModel = new ClientsModel;
      $client = $clientsModel->find($id);

      var_dump($_POST);
      if(Form::validate($_POST, ['client-name', 'email', 'phone', 'recruiter-id'])){
        $clientName = strip_tags($_POST['client-name']) ;
        $phone = strip_tags($_POST['phone']) ;
        $email = strip_tags($_POST['email']) ;
        $clientDesc = strip_tags($_POST['client-description']) ;
        $recruiterId = strip_tags($_POST['recruiter-id']) ;
    
        var_dump($_POST);
        $updatedClient = new ClientsModel;

        $updatedClient ->setId($client->id)
                          ->setName($clientName)
                          ->setPhone($phone)
                          ->setEmail($email)
                          ->setDescription($clientDesc)
                          ->setRecruiter_id($recruiterId)
                          ;
        $updatedClient->update();

        header('location: '.$_SERVER['HTTP_REFERER']);
        exit;
      }
    }
  }

  public function delete(string $stringId) {
    $ids = explode("-",$stringId) ;
    $client = new ClientsModel;
    foreach ($ids as $id) {
      $client->delete($id);
    }
    header('location: '.$_SERVER['HTTP_REFERER']);
    exit;
  }



}