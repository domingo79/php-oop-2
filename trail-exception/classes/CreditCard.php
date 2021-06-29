<?php
class CreditCard
{
    public $number;
    public $scadDate;
    public $cvv;

    public function __construct(int $number, string $scadDate, int $cvv)
    {
        $this->number = $number;
        $this->scadDate = $scadDate;
        $this->cvv = $cvv;
    }
    public function controllo($number)
    {
        if (!is_int($number)) {
            throw new Exception("Numero carta non valida", 1);
        } else {
            echo 'Pagato con successo!';
        }
    }
}
