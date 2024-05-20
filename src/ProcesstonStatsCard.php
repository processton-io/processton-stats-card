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
}
