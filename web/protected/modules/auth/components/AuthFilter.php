<?php
/**
 * AuthFilter class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package auth.components
 */

/**
 * Filter that automatically checks if the user has access to the current controller action.
 */
class AuthFilter extends CFilter
{
	public $params = array();
	protected function preFilter($filterChain)
	{
		$itemName = '';
		$controller = $filterChain->controller;

		if (($module = $controller->getModule()) !== null)
			$itemName .= $module->getId() . '.';

		$itemName .= $controller->getId();

		/* @var $user CWebUser */
		$user = Yii::app()->getUser();

		if ($user->checkAccess($itemName . '.*'))
			return true;

		$itemName .= '.' . $controller->action->getId();
		if ($user->checkAccess($itemName, $this->params))
			return true;

		throw new CHttpException(401, Yii::t('menu', 'Access denied.'));
              //  throw new CHttpException(401, "Access denied");
	}
}
