
<?php   
if (!defined('_PS_VERSION_'))
  exit;

class Msl extends Module
{
  public function __construct()
  {
      $this->name = 'MSL';
      $this->author = 'JDev';
      $this->version = '1.0.0';
      parent::__construct();
      $this->displayName = $this->l('Map Store Locator');
      $this->description = $this->l(' A plugin to display geographic data in a map.');
      $this->ps_versions_compliancy = [
        'min' => '1.7',
        'max' => _PS_VERSION_
      ];
  }
}