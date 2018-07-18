<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'year' => 'un ano|:count anos',
    'month' => 'un mes|:count meses',
    'week' => ':count semana|:count semanas',
    'day' => 'un día|:count días',
    'hour' => 'unha hora|:count horas',
    'minute' => 'un minuto|:count minutos',
    'second' => 'uns segundos|:count segundos',
    'ago' => 'hai :time',
    'from_now' => function ($time) {
        if (substr($time, 0, 2) === 'un') {
            return "n$time";
        }

        return "en $time";
    },
    'after' => ':time despois',
    'before' => ':time antes',
    'formats' => [
        'LT' => 'H:mm',
        'LTS' => 'H:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D [de] MMMM [de] YYYY',
        'LLL' => 'D [de] MMMM [de] YYYY H:mm',
        'LLLL' => 'dddd, D [de] MMMM [de] YYYY H:mm',
    ],
    'calendar' => [
        'sameDay' => '',
        'nextDay' => '',
        'nextWeek' => '',
        'lastDay' => '',
        'lastWeek' => '',
        'sameElse' => 'L',
    ],
    'ordinal' => ':numberº',
    'months' => ['xaneiro', 'febreiro', 'marzo', 'abril', 'maio', 'xuño', 'xullo', 'agosto', 'setembro', 'outubro', 'novembro', 'decembro'],
    'months_short' => ['xan.', 'feb.', 'mar.', 'abr.', 'mai.', 'xuñ.', 'xul.', 'ago.', 'set.', 'out.', 'nov.', 'dec.'],
    'weekdays' => ['domingo', 'luns', 'martes', 'mércores', 'xoves', 'venres', 'sábado'],
    'weekdays_short' => ['dom.', 'lun.', 'mar.', 'mér.', 'xov.', 'ven.', 'sáb.'],
    'weekdays_min' => ['do', 'lu', 'ma', 'mé', 'xo', 've', 'sá'],
];
