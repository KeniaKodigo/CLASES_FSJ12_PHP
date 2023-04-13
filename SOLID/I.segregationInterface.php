<?php

interface Work{
    public function code();
    public function test();
    public function desing();
    public function manager();
}

class Programmer implements Work{
    public function code()
    {
        
    }

    public function test()
    {
        throw new Error("I don´t test");
    }

    public function desing()
    {
        
    }

    public function manager()
    {
        throw new Error("I don´t manager");
    }
}


class ProjectManager implements Work{
    public function code()
    {
        throw new Error("I don´t code");
    }

    public function test()
    {
        throw new Error("I don´t test");
    }

    public function desing()
    {
        throw new Error("I don´t desing");
    }

    public function manager()
    {
        //code..
    }
}


/** solucion del problema */
interface WorkBackend{
    public function code();
}

interface WorkFrontEnd{
    public function desing();
}

interface WorkTest{
    public function test();
}

interface WorkProjectManager{
    public function manager();
}


class Programmer2 implements WorkBackend, WorkFrontEnd{
    public function code()
    {
        //code..
    }

    public function desing()
    {
        //code..
    }
}

class Tester implements WorkTest{
    public function test()
    {
        //code..
    }
}

class Manager implements WorkProjectManager{
    public function manager()
    {
        //code..
    }
}

?>