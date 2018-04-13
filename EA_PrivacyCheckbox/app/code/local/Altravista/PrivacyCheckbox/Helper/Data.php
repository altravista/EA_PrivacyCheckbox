<?php

class Altravista_PrivacyCheckbox_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	 * Return Hallo Gmap
	 *
	 * @return string
	 */
	public function getBaseUrl()
	{
		return 	Mage::getBaseUrl();
	}
	
	public function getStoreId()
	{
		return 	Mage::app()->getStore()->getStoreId();
	}
	
	public function setJubendaCode()
	{
		return 'YOURCODEJUBENDA';
	}
	
	public function getCheckBoxJubenda()
	{
		//if ($this->getStoreId() == 1){
		return '<ul class="form-list">
					<li class="control">
						<div class="input-box">
							<input type="checkbox" name="privacy" title="'. $this->__('Privacy Policy') . '" value="1" id="checkPrivacy" class="checkbox  required-entry">
						</div>
						<label class="required  privacy" for="privacy">' . $this->__('Ho preso visione e accetto ') . ' <a href="//www.iubenda.com/privacy-policy/'.$this->setJubendaCode().'" class="iubenda-nostyle no-brand iubenda-embed" title="'. $this->__('Privacy Policy') . '" style="text-decoration:underline;">l\'Informativa sulla Privacy</a></label>
					</li>
				</ul>';
		//}
		//else {
//			return '';
//		}
	}
	public function setPrivacylink()
	{
		
		return $this->getBaseUrl().'privacy-policy';
	}

	public function getCheckBox()
	{
		return '<ul class="form-list">
					<li class="control">
						<div class="input-box">
							<input type="checkbox" name="privacy" title="'. $this->__('Privacy Policy') . '" value="1" id="checkPrivacy" class="checkbox  required-entry">
							<label class="required privacy" for="privacy">' . $this->__('Ho letto e Accetto la ') . ' <a href="'.$this->setPrivacylink().'" title="'. $this->__('Privacy Policy') . '" style="text-decoration:underline;">Privacy Policy</a></label>
						</div>
					</li>
				</ul>';
	}
	
}
