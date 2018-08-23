<?php

namespace Platron\Connectum\services;

use Platron\Connectum\data_objects\BaseDataObject;

abstract class BaseRequest {
    
    /**
	 * Получить url для запроса
	 * @return string
	 */
	abstract public function getRequestUrl();
    
    /**
	 * Получить параметры, сгенерированные командой
	 * @return array
	 */
	public function getParameters() {
		$filledvars = array();
		foreach (get_object_vars($this) as $name => $value) {
			if ($value) {
                if($value instanceof BaseDataObject && !empty($value->getParameters())){
                    $filledvars[$name] = $value->getParameters();
                } else {
                    $filledvars[$name] = $value;
                }
			}
		}
		return $filledvars;
	}
}
