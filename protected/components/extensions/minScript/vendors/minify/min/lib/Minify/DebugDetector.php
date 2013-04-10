<?php

/**
 * Detect whether request should be debugged
 *
 * @package Minify
 * @author Stephen Clay <steve@mrclay.org>
 */
class Minify_DebugDetector {
    public static function shouldDebugRequest($cookie, $get, $requestUri)
    {
		if(YII_DEBUG) {
			return true;
		}
	
        if (isset($get['debug'])) {
            return true;
        }
        if (! empty($cookie['minifyDebug'])) {
            foreach (preg_split('/\\s+/', $cookie['minifyDebug']) as $debugUri) {
                $pattern = '@' . preg_quote($debugUri, '@') . '@i';
                $pattern = str_replace(array('\\*', '\\?'), array('.*', '.'), $pattern);
                if (preg_match($pattern, $requestUri)) {
                    return true;
                }
            }
        }
        return true;
    }
}
