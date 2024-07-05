<?php

namespace Processton\ProcesstonStatsCard;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class ProcesstonStatsCard
{
    public static function generateStatsCard(
        $title, 
        $value = 0, 
        $icon = '', 
        $subTitle = '', 
        $format = false,
        $attachments = [],
        $width = false,
        $name = ''
    ){
        return ProcesstonInteraction::generateElement(
            'stats_card',
            $title,
            self::generateStatsCardData($title, $value, $format, $icon, $subTitle),
            $subTitle,
            $attachments,
            [],
            $width,
            $name ? $name : $title
        );
    }

    public static function generateStatsCardByURL(
        $dataSrc,
        $title,
        $subTitle = '',
        $attachments = [],
        $width = false,
        $name = ''
    ) {
        return ProcesstonInteraction::generateElementByUrl(
            $dataSrc,
            $title,
            $subTitle,
            'stats_card',
            $attachments,
            [],
            $width,
            $name ? $name : $title
        );
    }

    public static function generateStatsCardData(
        $title,
        $value,
        $format = false,
        $icon = '',
        $subTitle = ''
    ){
        return [
            'title' => $title,
            'subtitle' => $subTitle,
            'type' => 'stats_card',
            'value' => $value,
            'format' => $format,
            'value_2' => '',
            'icon' => $icon,
            'unit' => '',
            'unit_2' => '',
            'precision' => '',
            'seperator' => '',
        ];
    }

    public static function generateStatsComparisonCard(
        $title, 
        $value = 0,
        $divider,
        $value_2 = 0,
        $icon = '',
        $unit,
        $unit2, 
        $subTitle = '', 
        $format = false,
        $attachments = [],
        $width = false,
        $name = ''
    ){
        return ProcesstonInteraction::generateElement(
            'stats_card',
            $title,
            self::generateStatsComparisonCardData($title, $value,$divider,$value_2, $unit, $unit2, $format, $icon, $subTitle),
            $subTitle,
            $attachments,
            [],
            $width,
            $name ? $name : $title
        );
    }

    public static function generateStatsComparisonCardData(
        $title,
        $value,
        $divider,
        $value2,
        $unit,
        $unit2,
        $format = false,
        $icon = '',
        $subTitle = ''
    ){
        return [
            'title' => $title,
            'subtitle' => $subTitle,
            'type' => 'simple_dual',
            'value' => $value,
            'format' => $format,
            'value_2' => $value2,
            'icon' => $icon,
            'unit' => $unit,
            'unit_2' => $unit2,
            'precision' => '',
            'seperator' => $divider,
        ];
    }
}
