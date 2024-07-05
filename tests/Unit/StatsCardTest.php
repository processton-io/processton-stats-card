<?php

namespace Processton\ProcesstonStatsCard\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Processton\ProcesstonStatsCard\ProcesstonStatsCard;

class StatsCardTest extends TestCase
{
    public function test_stats_card(): void
    {
        $content = ProcesstonStatsCard::generateStatsCard('Title', 0, '', 'Sub Title', false, [], false, '');

        $expected = [
            'type' => 'stats_card',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'data' => [
                'title' => 'Title',
                'subtitle' => 'Sub Title',
                'type' => 'stats_card',
                'value' => 0,
                'format' => false,
                'value_2' => '',
                'icon' => '',
                'unit' => '',
                'unit_2' => '',
                'precision' => '',
                'seperator' => ''
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }



    public function test_stats_card_with_url(): void
    {
        $content = ProcesstonStatsCard::generateStatsCardByURL('api.com/dummydata','Title','Sub Title', [], false, '');

        $expected = [
            'type' => 'stats_card',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => 'api.com/dummydata',
                'attachments' => [],
            ],
            'data' => [],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_stats_card_data(): void
    {
        $content = ProcesstonStatsCard::generateStatsCardData(
            'Title',
            0,
            false,
            '',
            'Sub Title'
        );

        $expected = [
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'type' => 'stats_card',
            'value' => 0,
            'format' => false,
            'value_2' => '',
            'icon' => '',
            'unit' => '',   
            'unit_2' => '',
            'precision' => '',
            'seperator' => ''
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_stats_card_comparison(): void
    {
        $content = ProcesstonStatsCard::generateStatsComparisonCard('Title', 0, '/',0, 'user','unit1','unit2', 'Sub Title', false, [], false, '');

        $expected = [
            'type' => 'stats_card',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'data' => [
                'title' => 'Title',
                'subtitle' => 'Sub Title',
                'type' => 'simple_dual',
                'value' => 0,
                'format' => false,
                'value_2' => 0,
                'icon' => 'user',
                'unit' => 'unit1',
                'unit_2' => 'unit2',
                'precision' => '',
                'seperator' => '/'
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_stats_card_comparison_data(): void
    {
        $content = ProcesstonStatsCard::generateStatsComparisonCardData(
            'Title',
            0,
            '/',
            0,
            'unit1',
            'unit2',
            false,
            '',
            'Sub Title'
        );

        $expected = [
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'type' => 'simple_dual',
            'value' => 0,
            'format' => false,
            'value_2' => 0,
            'icon' => '',
            'unit' => 'unit1',   
            'unit_2' => 'unit2',
            'precision' => '',
            'seperator' => '/'
        ];

        $this->assertEquals($expected, $content);

    }
}