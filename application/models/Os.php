<?php
/**
 * @package Analytical Center 2
 * @see for EN http://hack4sec.pro/wiki/index.php/Analytical_Center_2_en
 * @see for RU http://hack4sec.pro/wiki/index.php/Analytical_Center_2
 * @license MIT
 * @copyright (c) Anton Kuzmin <http://anton-kuzmin.ru> (ru) <http://anton-kuzmin.pro> (en)
 * @author Anton Kuzmin
 */
class Os extends Common {
    protected $_name = 'os';

    public function getList() {
        return $this->getAdapter()->fetchPairs("SELECT id, name FROM {$this->_name} ORDER BY id ASC");
    }

} 