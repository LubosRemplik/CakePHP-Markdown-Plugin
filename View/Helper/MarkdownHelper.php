<?php

App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'Markdown.Markdown/Michelf/Markdown');

/**
 * Markdown Helper
 *
 * Parsing markdown syntax into HTML
 **/
class MarkdownHelper extends AppHelper {

	public function parse($text) {
		$parser = new Michelf\Markdown;
		$html = $parser->defaultTransform($text);
		return $html;
	}
}
