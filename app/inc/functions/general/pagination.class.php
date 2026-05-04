<?php
class Pagination {
	private $query = array();
	private $current_page = 1;
	private $total_pages  = 1;

	function __construct($total_pages, $display_pages = 5) {
		$this->query = $_GET;
		$this->total_pages = $total_pages;
		$this->current_page = $this->query['page'] ?? 1;


		if($this->current_page < 1 || $this->current_page > $this->total_pages) {
			$this->current_page = 1;
		}

		if($display_pages > $this->total_pages) {
			$display_pages = $this->total_pages;
		}


		$startpage = 1;
		$display_half_down = round($display_pages/2, 0, PHP_ROUND_HALF_DOWN);
		$display_half_up = round($display_pages/2, 0, PHP_ROUND_HALF_UP);


		if($this->current_page > $display_half_up) {
			$startpage = $this->current_page - $display_half_down;
		}

		if($this->current_page > ($this->total_pages - $display_half_down)) {
			$startpage = $this->total_pages - $display_pages + 1;
		}

		echo "<ul class='pagination'>";
		echo $this->first();
		echo $this->prev();

		for($i = $startpage; $i < $startpage+$display_pages; $i++) {
			echo $this->page($i);
		}

		echo $this->next();
		echo $this->last();
		echo "</ul>";
	}

	private function first() {
		if($this->current_page > 1) {
			$this->query['page'] = 1;
			$link = '?'.http_build_query($this->query);
			$disabled = '';
		} else {
			$link = '#!';
			$disabled = 'disabled';
		}

		return "
			<li class='page-item {$disabled}'>
				<a class='page-link' href='{$link}'>
					<i class='fa-regular fa-angles-left'></i>
				</a>
			</li>
			";
	}

	private function prev() {
		if($this->current_page > 1) {
			$this->query['page'] = $this->current_page - 1;
			$link = '?'.http_build_query($this->query);
			$disabled = '';
		} else {
			$link = '#!';
			$disabled = 'disabled';
		}

		return "
			<li class='page-item {$disabled}'>
				<a class='page-link' href='{$link}'>
					<i class='fa-regular fa-angle-left'></i>
				</a>
			</li>
			";
	}

	private function next() {
		if(($this->current_page + 1) <= $this->total_pages) {
			$this->query['page'] = $this->current_page + 1;
			$link = '?'.http_build_query($this->query);
			$disabled = '';
		} else {
			$link = '#!';
			$disabled = 'disabled';
		}

		return "
			<li class='page-item {$disabled}'>
				<a class='page-link' href='{$link}'>
					<i class='fa-regular fa-angle-right'></i>
				</a>
			</li>
			";
	}

	private function last() {
		if($this->current_page >= $this->total_pages) {
			$link = '#!';
			$disabled = 'disabled';
		} else {
			$this->query['page'] = $this->total_pages;
			$link = '?'.http_build_query($this->query);
			$disabled = '';
		}

		return "
			<li class='page-item {$disabled}'>
				<a class='page-link' href='{$link}'>
					<i class='fa-regular fa-angles-right'></i>
				</a>
			</li>
			";
	}

	private function page($number) {
		if($number == $this->current_page) {
			$link = '#!';
			$active = 'active';
		} else {
			$this->query['page'] = $number;
			$link = '?'.http_build_query($this->query);
			$active = '';
		}
		$this->query['page'] = $number;
		// $link =
		return "
			<li class='page-item {$active}'>
				<a class='page-link' href='{$link}'>{$number}</a>
			</li>
			";
	}

}