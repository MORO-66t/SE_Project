<?php

class MovieTicket {
    private $id;
    private $Moviename;
    private $theatre;
    private $showTime;
    private $Price;
    private $Qrcode;
    private $numberofseat;

    // Getter and Setter for $id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    // Getter and Setter for $Moviename
    public function getMoviename() {
        return $this->Moviename;
    }
    public function setMoviename($Moviename) {
        $this->Moviename = $Moviename;
    }

    // ... Repeat for each property ...

    // Getter and Setter for $numberofseat
    public function getNumberofseat() {
        return $this->numberofseat;
    }
    public function setNumberofseat($numberofseat) {
        $this->numberofseat = $numberofseat;
    }



    public function __construct($id){
        
    }


}
?>