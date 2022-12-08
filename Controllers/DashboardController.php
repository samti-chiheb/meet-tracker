<?php
namespace App\Controllers;


class DashboardController extends Controller
{
  public function index() {
    $recruitersController = new RecruitersController;
    $recruiters = $recruitersController->index();
    $clientsController = new ClientsController;
    $clients = $clientsController->index();
    $this->render('dashboard','dashboard/index');
  }





}