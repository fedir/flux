<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Claus Due <claus@wildside.dk>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * @author Claus Due <claus@wildside.dk>
 * @package Flux
 */
class Tx_Flux_Form_Container_ColumnTest extends Tx_Flux_Tests_Functional_Form_Container_AbstractContainerTest {

	/**
	 * @test
	 */
	public function canUseGetAreasMethod() {
		/** @var Tx_Flux_Form_Container_Column $instance */
		$instance = $this->createInstance();
		$this->performTestBuild($instance);
		$this->assertEmpty($instance->getAreas());
	}

	/**
	 * Override: this Component does not support LLL rewriting
	 * and must skip this test which it otherwise inherits
	 *
	 * @disabledtest
	 */
	public function canAutoWriteLabel() {

	}

}
