<?php

/**
 * Created by PhpStorm.
 * User: momus
 * Date: 2/13/17
 * Time: 7:44 PM
 */
class File
{

    private $losowyCiag;

    public function __construct()
    {
        $this->losowyCiag = uniqid();
    }

    private function getLosowyCiag()
    {
        return $this->losowyCiag;
    }

    public function dopisz()
    {
        $fileName = __DIR__ . '/plik.txt';
        $data = $this->getLosowyCiag();
        file_put_contents($fileName, $data . "\n", FILE_APPEND | LOCK_EX);

        echo "dopisano: {$data}\n";
    }
}


(new File())->dopisz();