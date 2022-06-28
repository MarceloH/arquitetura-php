<?php

namespace Alura\Arquitetura\Dominio;

abstract class OuvinteDeEvento
{
    public function processa(Evento $evento): void
    {
        if ($this->sabeProcessar($evento)) {
            $this->reageAo($evento);
        }
    }

    abstract public function sabeProcessar(Evento $evento): bool;
    abstract public function reageAo(Evento $evento): void;
}
