<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace DataSource\Salarioanodb;

use Atlas\Table\Row;

/**
 * @property mixed $ID INTEGER NOT NULL
 * @property mixed $ano TEXT NOT NULL
 * @property mixed $vigencia VARCHAR(150) NOT NULL
 * @property mixed $valor REAL(8,2)
 * @property mixed $atoLegal TEXT
 */
class SalarioanodbRow extends Row
{
    protected $cols = [
        'ID' => null,
        'ano' => null,
        'vigencia' => null,
        'valor' => null,
        'atoLegal' => null,
    ];
}