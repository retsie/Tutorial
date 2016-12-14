<?php

function view_url($uri)
{
    $CI =& get_instance();
	return $CI->config->base_url('application/views/'.$CI->config->item('views').''.$uri);
}

function view_img($uri, $tag=false)
{
	if($tag)
	{
		return '<img class="img-responsive" src="'.view_url('assets/img/'.$uri).'" alt="'.$tag.'">';
	}
	else
	{
		return view_url('assets/img/'.$uri);
	}
	
}

function view_js($uri, $tag=false)
{
	if($tag)
	{
		return '<script type="text/javascript" src="'.view_url('assets/js/'.$uri).'"></script>';
	}
	else
	{
		return view_url('assets/js/'.$uri);
	}
}

function view_css($uri, $tag=false)
{
	if($tag)
	{
		$media=false;
		if(is_string($tag))
		{
			$media = 'media="'.$tag.'"';
		}
		return '<link href="'.view_url('assets/stylesheets/'.$uri).'" type="text/css" rel="stylesheet" '.$media.'/>';
	}
	
	return view_url('assets/stylesheets/'.$uri);
}

function view_fonts($uri, $tag=false)
{
	if($tag)
	{
		$media=false;
		if(is_string($tag))
		{
			$media = 'media="'.$tag.'"';
		}
		return '<link href="'.view_url('assets/fonts/'.$uri).'" type="text/css" rel="stylesheet" '.$media.'/>';
	}
	
	return view_url('assets/css/'.$uri);
}