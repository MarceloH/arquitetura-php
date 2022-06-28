<?php

namespace Alura\Arquitetura\Dominio;

interface Evento
{
    public function momento(): \DateTimeImmutable;
}
