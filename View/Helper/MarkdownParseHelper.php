<?php

App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'Markdown.Markdown/Michelf/Markdown');

/**
 * Markdown Helper
 *
 * Parsing markdown syntax into HTML
 **/
class MarkdownParseHelper extends AppHelper {

	public function afterRenderFile($viewFile, $content) {
		$parser = new Michelf\Markdown;
		$html = $parser->defaultTransform($content);
		return $html;
	}
}
