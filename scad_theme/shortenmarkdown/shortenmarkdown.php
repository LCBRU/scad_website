<?php
namespace scad_theme;
// Prevent direct access to the extension to enhance security.
defined('AUTOMAD') or die();

class shortenmarkdown {
    public function shortenmarkdown(?string $str, $maxLines, string $ellipsis = ' ...') {
		$lines = explode("\n", $str);
		array_splice($lines, $maxLines);
		$result = implode("\n", $lines);

		if ($result != $str) {
			$result .= "\n\n" . $ellipsis;
		}
		return $result;
    }
}