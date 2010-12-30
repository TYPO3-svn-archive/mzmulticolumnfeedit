<?php

class ux_tx_multicolumn_pi1 extends tx_multicolumn_pi1 {   
	 
	 /**
	 * Render an array with data element with $confName
	 *
	 * @param	String		$confName		Path to typoscript to render each element with
	 * @param	Array		$recordsArray	Array which contains elements (array) for typoscript rendering
	 * @param	Array		$appendData		Additinal data
	 * @return	String		All items rendered as a string
	 */
	public function renderListItems($confName, array $recordsArray, array $appendData = array(), $debug = false) {
		$arrayLength= count($recordsArray);
		$rowNr	= 1;
		$index = 0;
		$content = null;
		$currentCobjData = $this->cObj->data;
		
		foreach($recordsArray as $data) {
			// first run?
			if($rowNr == 1)
				$data['isFirst'] = $confName.'First listItemFirst';

			// last run
			if($rowNr == $arrayLength)
				$data['isLast'] = $confName.'Last listItemLast';

			// push recordNumber to $data array
			$data['recordNumber'] = $rowNr;
			$data['index'] = $rowNr-1;

			// push arrayLength to $data array
			$data['arrayLength'] = $arrayLength;

			// Add odd or even to the cObjData array.
			$data['oddeven'] = $rowNr % 2 ? $confName.'Odd listItemOdd' : $confName.'Even listItemEven';

			$data = array_merge($data, $appendData);

			// Render
			$this->cObj->data = $data;
			
			/* BEGIN OF EDIT*/
			$temp = explode(":",$this->cObj->currentRecord);
			$this->cObj->currentRecord= $temp[0].":".$this->cObj->data['uid'];
			/* END OF EDIT*/
			
			$content .= $this->cObj->cObjGetSingle($this->conf[$confName], $this->conf[$confName.'.']);

			$rowNr ++;
		}
		
		$this->restoreCobjData();
		return $content;
	}
}

?>
