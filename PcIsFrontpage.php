<?php
/**
 * PcIsFrontpage.php
 * Created on 08 07 2012 (2:35 PM)
 *
 */

class PcIsFrontpage extends CBehavior {
	/**
	 * @return bool - are we on front page or not?
	 */
	public function isFrontPage() {
		return (Yii::app()->homeUrl == Yii::app()->request->requestUri) ? true : false;
	}
}
