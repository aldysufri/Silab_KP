<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['num_links'] = 4;
$config['page_query_string'] = FALSE;
$config['use_page_numbers'] = TRUE;
$config['query_string_segment'] = 'page';

$config['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
$config['full_tag_close'] = '</ul></div>';

$config['first_link'] = FALSE;

$config['last_link'] = FALSE;

$config['next_tag_open'] = '<li title="Next Page">';
$config['next_link'] = '<i class="material-icons">chevron_right</i>';
$config['next_tag_close'] = '</li>';

$config['prev_tag_open'] = '<li title="Pervious Page">';
$config['prev_link'] = '<i class="material-icons">chevron_left</i>';
$config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="active"><a href="">';
$config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="waves-effect">';
$config['num_tag_close'] = '</li>';
