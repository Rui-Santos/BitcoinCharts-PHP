<?php
/*
 * Bitcoin Charts API Library Test
 * 
 * @author    Brandon Beasley <http://brandonbeasley.com/>
 * @copyright Copyright (C) 2011 Brandon Beasley
 * @license   GNU GENERAL PUBLIC LICENSE (Version 3, 29 June 2007)
 * 
 *          Please consider donating if you use this library:
 *            
 *              1PPkz4tQepxyXiEf9xjyZS8cTkxN9Q6uPN
 * 
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * 
 */

require 'bitcoinCharts.php';

$bitcoinCharts = new BitcoinCharts();

/*
 * Weighted Prices
 */
$weightedPrices = $bitcoinCharts->weighted_prices();
pre_print($weightedPrices, 'Weighted Prices');

/*
 * Markets Data
 */
$marketsData = $bitcoinCharts->markets();
pre_print($marketsData, 'Markets Data');


/*
 * Historic Trade Data
 */
$tradeData = $bitcoinCharts->trades(array('symbol' => 'mtgoxUSD'));
pre_print($tradeData, 'Historical Trade Data');


/*
 * This function is used to test output 
 */
function pre_print($var, $head = NULL){
        echo '<pre>';
        echo '<h2>' . $head . '</h2>';
        print_r($var);
        echo '</pre>';
        echo '<hr>';
}
