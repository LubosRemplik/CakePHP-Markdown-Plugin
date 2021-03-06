<?php

App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'Markdown.Markdown/Michelf/Markdown.inc');
App::import('Vendor', 'Markdown.Markdown/Michelf/MarkdownExtra.inc');

/**
 * Markdown Helper
 *
 * Parsing markdown syntax into HTML
 **/
class MarkdownHelper extends AppHelper {

	public function parse($text) {
		$parser = new Michelf\MarkdownExtra;
		$html = $parser->defaultTransform($text);
		return $html;
	}
}
