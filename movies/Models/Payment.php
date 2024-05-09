<?php
class Payment {
    private $creditname; // String: Name on the credit card
    private $creditnumber; // Integer: Credit card number
    private $creditendtime; // String: Expiration date of the credit card

    // Getter and Setter for $creditname
    public function getCreditname() {
        return $this->creditname;
    }
    public function setCreditname($creditname) {
        $this->creditname = $creditname;
    }

    // Getter and Setter for $creditnumber
    public function getCreditnumber() {
        return $this->creditnumber;
    }
    public function setCreditnumber($creditnumber) {
        $this->creditnumber = $creditnumber;
    }

    // Getter and Setter for $creditendtime
    public function getCreditendtime() {
        return $this->creditendtime;
    }
    public function setCreditendtime($creditendtime) {
        $this->creditendtime = $creditendtime;
    }

    // Method to calculate price
    public function calculatePrice() {
        // Implement price calculation logic here
        // Return the calculated price as an integer
    }

    // Method to choose currencies
    public function chooseCurrencies() {
        // Implement currency choice logic here
    }
}

?>