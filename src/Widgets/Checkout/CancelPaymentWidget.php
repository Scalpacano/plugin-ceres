<?php

namespace Ceres\Widgets\Checkout;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\Settings\ValueListFactory;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class CancelPaymentWidget extends BaseWidget
{
    protected $template = "Ceres::Widgets.Checkout.CancelPaymentWidget";

    public function getData()
    {
        return WidgetDataFactory::make("Ceres::CancelPaymentWidget")
            ->withLabel("Widget.cancelPaymentLabel")
            ->withPreviewImageUrl("/images/widgets/cancel-payment.svg")
            ->withType(WidgetTypes::CHECKOUT)
            ->withCategory(WidgetCategories::CHECKOUT)
            ->withPosition(800)
            ->toArray();
    }

    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);

        $settings->createCustomClass();
        $settings->createAppearance();

        $settings->createButtonSize();
        $settings->createSpacing();

        return $settings->toArray();
    }
}
