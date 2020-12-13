<?php

namespace Src\Entity;

class Work {

    public $id;
    public $workName;
    public $startingDate;
    public $endingDate;
    public $status;

    function __construct($id, $workName, $startingDate, $enddingDate, $status) {
        $this->id = $id;
        $this->workName = $workName;
        $this->startingDate = $startingDate;
        $this->endingDate = $enddingDate;
        $this->status = $status;
    }
}