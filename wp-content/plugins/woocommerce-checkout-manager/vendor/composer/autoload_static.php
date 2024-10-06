<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d2147291d87314461e0dfd3c1cc37d1
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/actions.php',
        'a7b5e344bf0356201afb442ca78f3772' => __DIR__ . '/../..' . '/compatibility/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QuadLayers\\WP_Plugin_Table_Links\\' => 33,
            'QuadLayers\\WP_Plugin_Suggestions\\' => 33,
            'QuadLayers\\WP_Notice_Plugin_Required\\' => 37,
            'QuadLayers\\WP_Notice_Plugin_Promote\\' => 36,
            'QuadLayers\\WP_Dashboard_Widget_News\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QuadLayers\\WP_Plugin_Table_Links\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src',
        ),
        'QuadLayers\\WP_Plugin_Suggestions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Required\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Promote\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src',
        ),
        'QuadLayers\\WP_Dashboard_Widget_News\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Composer\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-manager.php',
        'Automattic\\Jetpack\\Composer\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
        'Automattic\\Jetpack\\Script_Data' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-script-data.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'QuadLayers\\WOOCCM\\Backend' => __DIR__ . '/../..' . '/lib/class-backend.php',
        'QuadLayers\\WOOCCM\\Controller\\Advanced' => __DIR__ . '/../..' . '/lib/controller/class-advanced.php',
        'QuadLayers\\WOOCCM\\Controller\\Checkout' => __DIR__ . '/../..' . '/lib/controller/class-checkout.php',
        'QuadLayers\\WOOCCM\\Controller\\Controller' => __DIR__ . '/../..' . '/lib/controller/class-controller.php',
        'QuadLayers\\WOOCCM\\Controller\\Email' => __DIR__ . '/../..' . '/lib/controller/class-email.php',
        'QuadLayers\\WOOCCM\\Controller\\Field' => __DIR__ . '/../..' . '/lib/controller/class-field.php',
        'QuadLayers\\WOOCCM\\Controller\\Field_Additional' => __DIR__ . '/../..' . '/lib/controller/class-field-additional.php',
        'QuadLayers\\WOOCCM\\Controller\\Field_Billing' => __DIR__ . '/../..' . '/lib/controller/class-field-billing.php',
        'QuadLayers\\WOOCCM\\Controller\\Field_Shipping' => __DIR__ . '/../..' . '/lib/controller/class-field-shipping.php',
        'QuadLayers\\WOOCCM\\Controller\\My_Account' => __DIR__ . '/../..' . '/lib/controller/class-my-account.php',
        'QuadLayers\\WOOCCM\\Controller\\Order' => __DIR__ . '/../..' . '/lib/controller/class-order.php',
        'QuadLayers\\WOOCCM\\Controller\\Premium' => __DIR__ . '/../..' . '/lib/controller/class-premium.php',
        'QuadLayers\\WOOCCM\\Controller\\Suggestions' => __DIR__ . '/../..' . '/lib/controller/class-suggestions.php',
        'QuadLayers\\WOOCCM\\Helpers' => __DIR__ . '/../..' . '/lib/class-helpers.php',
        'QuadLayers\\WOOCCM\\Model\\Field' => __DIR__ . '/../..' . '/lib/model/class-field.php',
        'QuadLayers\\WOOCCM\\Model\\Field_Additional' => __DIR__ . '/../..' . '/lib/model/class-field-additional.php',
        'QuadLayers\\WOOCCM\\Model\\Field_Billing' => __DIR__ . '/../..' . '/lib/model/class-field-billing.php',
        'QuadLayers\\WOOCCM\\Model\\Field_Shipping' => __DIR__ . '/../..' . '/lib/model/class-field-shipping.php',
        'QuadLayers\\WOOCCM\\Model\\Model' => __DIR__ . '/../..' . '/lib/model/class-model.php',
        'QuadLayers\\WOOCCM\\Plugin' => __DIR__ . '/../..' . '/lib/class-plugin.php',
        'QuadLayers\\WOOCCM\\Upload' => __DIR__ . '/../..' . '/lib/class-upload.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Additional' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-additional.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Conditional' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-conditional.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Disable' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-disable.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Filter' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-filter.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Handler' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-handler.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_I18n' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-i18n.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Register' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-register.php',
        'QuadLayers\\WOOCCM\\View\\Frontend\\Fields_Validation' => __DIR__ . '/../..' . '/lib/view/frontend/class-fields-validation.php',
        'QuadLayers\\WP_Dashboard_Widget_News\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Page' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Table' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
        'QuadLayers\\WP_Plugin_Table_Links\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d2147291d87314461e0dfd3c1cc37d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d2147291d87314461e0dfd3c1cc37d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d2147291d87314461e0dfd3c1cc37d1::$classMap;

        }, null, ClassLoader::class);
    }
}
