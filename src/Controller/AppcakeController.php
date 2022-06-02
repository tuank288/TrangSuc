<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AppcakeController extends Controller
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth');
    }
}
