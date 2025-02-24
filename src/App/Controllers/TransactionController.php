<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, TransactionService};
use Framework\Validator;

class TransactionController
{
      public function __construct(
            private TemplateEngine $view,
            private ValidatorService $validatorService,
            private TransactionService $transactionService
      ) {}

      public function createView()
      {
            echo $this->view->render("transactions/create.php");
      }

      public function create()
      {
            $this->validatorService->validateTransaction($_POST);

            $this->transactionService->create($_POST);

            redirectTo('/');
      }
}
