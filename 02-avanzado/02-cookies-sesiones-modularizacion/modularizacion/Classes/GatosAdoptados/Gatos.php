<?php 

namespace GatosAdopados;

class Gato {

    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function __construct(string $name, $date_adopted, string $adopted_by) {
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