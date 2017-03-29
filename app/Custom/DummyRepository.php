<?php

namespace App\Custom;

use App\Custom\CrudRepository;

class DummyRepository implements CrudRepository {
    
    public function query() {
        return [
            [
                'nome' => 'Mario Rossi',
                'indirizzo' => 'via ancona 10, Jesi(AN)'
            ],
            [
                'nome' => 'Gino Neri',
                'indirizzo' => 'via napoli 123, Cingoli(MC)'
            ]
        ];
    }

}

