<?php
////////////////////////////////////////////////////////////////////////////
// SCHEDULEMAKER - Set Ajax View
//
// @file	views/SetAjaxView.php
// @descrip	This view will generate a JSON array that contains JSON
//			representations of the array that is passed to the view.
// @author	Benjamin Russell (benrr101@csh.rit.edu)
////////////////////////////////////////////////////////////////////////////

class SetAjaxView extends View {
	// MEMBER VARIABLES ////////////////////////////////////////////////////
	
	// array	The set of data to render a JSON
	private $dataSet;

	// METHODS /////////////////////////////////////////////////////////////
	public function __construct($data) {
		$this->dataSet = $data;
	}

	public function render() {
		foreach($this->dataSet as &$obj) {
			$obj = $obj->jsonEncode();
		}
		echo json_encode($this->dataSet);
	}
}
