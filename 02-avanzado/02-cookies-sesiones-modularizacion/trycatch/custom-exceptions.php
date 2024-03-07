<?php 

class MichiException extends Exception {
    public function getMeow() {
        return "Meow!";
    }
}

class ConejoException extends Exception {
    public function getRabbit() {
        return "Conejo";
    }
}

try {
    $exception = readline("Excepción a lanzar: ");

    if ($exception == "michi")
        throw new MichiException("Michi incorrecto");
    else
        throw new ConejoException("Conejo incorrecto");
} catch (MichiException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getMeow();
} catch (ConejoException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getRabbit();
} finally {
    echo "\n Fin";
}