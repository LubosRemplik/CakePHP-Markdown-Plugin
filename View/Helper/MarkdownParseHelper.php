<?php

App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'Markdown.Markdown/Michelf/Markdown.inc');
App::import('Vendor', 'Markdown.Markdown/Michelf/MarkdownExtra.inc');

/**
 * Markdown Helper
 *
 * Parsing markdown syntax into HTML
 **/
class MarkdownParseHelper extends AppHelper {

	public function afterRenderFile($viewFile, $content) {
		$parser = new Michelf\MarkdownExtra;
		$html = $parser->defaultTransform($content);
		return $html;
	}
}
