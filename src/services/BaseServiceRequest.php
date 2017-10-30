<?php

namespace Platron\Connectum\services;

abstract class BaseServiceRequest {
    
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
				$filledvars[$name] = (string)$value;
			}
		}

		return $filledvars;
	}
}
