<?php

namespace Platron\Connectum\data_objects;

abstract class BaseDataObject {
    /**
	 * Получить параметры, сгенерированные командой
	 * @return array
	 */
	public function getParameters() {
		$filledvars = array();
		foreach (get_object_vars($this) as $name => $value) {
            if ($value || $value === 0) {
                if($value instanceof BaseDataObject){
                    $filledvars[$name] = $value->getParameters();
                } else {
                    $filledvars[$name] = $value;
                }
			}
		}

		return $filledvars;
	}
}
