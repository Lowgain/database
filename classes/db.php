<?php defined('SYSPATH') or die('No direct script access.');

class DB {

	public static function query($type, $sql)
	{
		return new Database_Query($type, $sql);
	}

	public static function select($columns = NULL)
	{
		return new Database_Query_Builder_Select(func_get_args());
	}

	public static function insert($table, array $columns = NULL)
	{
		return new Database_Query_Builder_Insert($table, $columns);
	}

	public static function update($table)
	{
		return new Database_Query_Builder_Update($table);
	}

	public static function expr($string)
	{
		return new Database_Expression($string);
	}

} // End DB