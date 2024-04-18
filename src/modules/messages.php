<?php

function printMessage($message) {
    if ($message=='success-create')
        return '<span class="text-success">Registrado com Sucesso!</span>';
    if ($message=='error-create')
        return '<span class="text-error">Erro ao Registrar.</span>';

    if ($message=='success-remove')
        return '<span class="text-success">Registro Removido com Sucesso</span>';
    if ($message=='error-remove')
        return '<span class="text-error">Erro ao remover o registro.</span>';

    if ($message=='success-update')
        return '<span class="text-success">Registro Atualizado com Sucesso!</span>';
    if ($message=='error-update')
        return '<span class="text-error">Erro ao Atualizar o Registro.</span>';
}