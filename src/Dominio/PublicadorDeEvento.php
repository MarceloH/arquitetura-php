<?php

namespace Alura\Arquitetura\Dominio;

class PublicadorDeEvento
{
    private array $ouvintes = [];
    public function adicionarOuvinte($ouvinte): void
    {
        $this->ouvintes[] = $ouvinte;
    }

    public function publicar(Evento $evento): void
    {
        foreach ($this->ouvintes as $ouvinte) {
            $ouvinte->processa($evento);
        }
    }
}
