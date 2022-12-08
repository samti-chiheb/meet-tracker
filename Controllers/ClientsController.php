<?php
namespace App\Controllers;

use App\Core\Form;
use App\Models\ClientsModel;
use App\Models\RecruitersModel;

class ClientsController extends Controller{

  public function index() {
    if ( isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
      $clientsModel = new ClientsModel;
      $userId = $_SESSION['user']['id'];
      // get all clients
      $clients = $clientsModel->findBy(['user_id'=>$userId,'archive'=>1]);
      // join
      $recruitersJoin = $clientsModel->join('recruiters', 'clients.recruiter_id=recruiters.id');
      $uniqueRecruitersJoin = $clientsModel->join('recruiters', 'clients.recruiter_id=recruiters.id GROUP BY recruiters.id');
      
      
      $this->render('clients','clients/index', compact('clients', 'recruitersJoin', 'uniqueRecruitersJoin'));
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




}