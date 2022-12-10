<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.geolocation.by_ip_address.form_data_provider' shared service.

return $this->services['prestashop.admin.geolocation.by_ip_address.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationByIpAddressFormDataProvider(${($_ = isset($this->services['prestashop.adapter.geolocation_by_ip_address.configuration']) ? $this->services['prestashop.adapter.geolocation_by_ip_address.configuration'] : $this->load('getPrestashop_Adapter_GeolocationByIpAddress_ConfigurationService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.geolocation.geo_lite_city.checker']) ? $this->services['prestashop.core.geolocation.geo_lite_city.checker'] : $this->load('getPrestashop_Core_Geolocation_GeoLiteCity_CheckerService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.validation.validator']) ? $this->services['prestashop.core.validation.validator'] : $this->load('getPrestashop_Core_Validation_ValidatorService.php')) && false ?: '_'});
