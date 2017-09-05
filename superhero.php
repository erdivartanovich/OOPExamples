<?php

interface ISuperhero {
    function terbang();
}


class Manusia {
    function __construct($name) {
        $this->name = $name;
        $this->kaki = 2;
    }

    function berjalan() {
        echo $this->name . " sedang berjalan";
        echo "\n";
    }
}

class Wartawan extends Manusia {
    function menulis() {
        echo $this->name . " bisa menulis";
        echo "\n";
        
    }
}


class Superman extends Wartawan implements ISuperhero{
    function terbang() {
        echo $this->name . " bisa terbang" . "\n";
    }
}


class Dog {
    function __construct($pname) {
        $this->name = $pname;
        $this->kaki = 4;
    }
}


class AnjingSuper extends Dog implements ISuperhero{
    function terbang() {
        echo $this->name . " bisa terbang" . "\n";
    }
}

$buddy = new AnjingSuper('buddy');
$clark = new Superman('clark');

echo $buddy->kaki . "\n";
$buddy->terbang();

echo $clark->kaki . "\n";
$clark->terbang();


function Party(Superman $undangan1, AnjingSuper $undangan2) {
    echo $undangan1->name . " hadir di pesta" . "\n";
    echo $undangan2->name . " hadir di pesta" . "\n";
}

Party($clark, $buddy);

// how buddy can invited to Party?
// this code will be error, fix it!

//Party($buddy); 


