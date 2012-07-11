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
		// remove the query string from the URL, if its there:
		$stripped_uri = (strpos(Yii::app()->request->requestUri, "?")) ? substr(Yii::app()->request->requestUri, 0, strpos(Yii::app()->request->requestUri, "?")) : Yii::app()->request->requestUri;
		return (Yii::app()->homeUrl == $stripped_uri) ? true : false;
	}
}
