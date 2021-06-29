<?php
trait getFullName
{
    public function getFullName()
    {
        return '- "' . $this->name . '" ' . $this->ingredients . ' €: ' . $this->price;
    }
}
