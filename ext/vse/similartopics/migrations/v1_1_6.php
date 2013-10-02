<?php
/**
*
* @package Precise Similar Topics II
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vse\similartopics\migrations;

class v1_1_6 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['similar_topics_version'], '1.1.6', '>=');
	}

	static public function depends_on()
	{
		return array('\vse\similartopics\migrations\v1_1_5');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('similar_topics_words', '')),
			array('config.update', array('similar_topics_version', '1.1.6')),
		);
	}
}