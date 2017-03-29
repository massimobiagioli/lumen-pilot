<?php

namespace App\Http\Controllers;

use App\Custom\CrudRepository;

class DummyController extends Controller {
    
    private $repo;
    
    /**
     * Create a dummy controller instance.
     *
     * @return void
     */
    public function __construct(CrudRepository $repo) {
        $this->repo = $repo;
    }

    public function query() {
        return $this->repo->query();
    }
    
}
