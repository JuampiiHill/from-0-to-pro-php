<?php 

namespace App\Classes;

class GatosAdoptados {

    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function __construct( $name, $date_adopted, $adopted_by) {
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getDateAdopted() {
        return $this->date_adopted;
    }

    public function getAdoptedBy() {
        return $this->adopted_by;
    }
}