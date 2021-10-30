<?php
/**
 * Page template file
 * 
 * @package ASM
 */

get_header();
?>
<table id="wp-calendar" class="wp-calendar-table">
	<caption>October 2021</caption>
	<thead>
	<tr>
		<th scope="col" title="Monday">M</th>
		<th scope="col" title="Tuesday">T</th>
		<th scope="col" title="Wednesday">W</th>
		<th scope="col" title="Thursday">T</th>
		<th scope="col" title="Friday">F</th>
		<th scope="col" title="Saturday">S</th>
		<th scope="col" title="Sunday">S</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td colspan="4" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td>
	</tr>
	<tr>
		<td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
	</tr>
	<tr>
		<td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
	</tr>
	<tr>
		<td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td><a href="http://localhost/wp/swa/2021/10/24/" aria-label="Posts published on 24 October 2021">24</a></td>
	</tr>
	<tr>
		<td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td id="today">30</td><td>31</td>
	</tr>
	</tbody>
	</table>
<div id="block-25" class="widget widget-sidebar widget_block widget_calendar"><div class="wp-block-calendar">
</div>
<main id="main" class="page-main" role="main">
  <div class="container page-container">
    <div class="row">
      <?php //the_content() ?>
    </div>
  </div> <!-- end container -->
</main>


<?php
get_footer();