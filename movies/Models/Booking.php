<?php
class BookingInfo {
    private $amount;
    private $ticketinfo; // Assuming 'ticketinfo' is an object of another class
    private $Qrcode; // Assuming 'Qrcode' is a string representing the path to the image

    // Getter and Setter for $amount
    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
    }

    // Getter and Setter for $ticketinfo
    public function getTicketinfo() {
        return $this->ticketinfo;
    }
    public function setTicketinfo($ticketinfo) {
        $this->ticketinfo = $ticketinfo;
    }

    // Getter and Setter for $Qrcode
    public function getQrcode() {
        return $this->Qrcode;
    }
    public function setQrcode($Qrcode) {
        $this->Qrcode = $Qrcode;
    }

    // Method to book a ticket
    public function Book() {
        // Implement booking logic here
        // Return true on success, false on failure
    }

    // Method to view booking
    public function viewBooking() {
        // Implement logic to view booking details here
    }

    // Method to manage booking
    public function manageBooking() {
        // Implement logic to manage booking here
    }

    // Method to choose party
    public function chooseParty() {
        // Implement logic to choose party here
    }
}

?>