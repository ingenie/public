<?php

class SyncAuthError extends WP_Error
{
	const TYPE_VALIDATION_FAILED = 1;
	const TYPE_MISSING_TOKEN = 2;
	const TYPE_INVALID_USER = 3;

	public $type = NULL;

	public function __construct($type)
	{
//		new WP_Error($code, $message, $data);
		$this->type = $type;
		switch ($type) {
		default:
		case self::TYPE_VALIDATION_FAILED:
			$code = 'token_invalid';
			break;
		case self::TYPE_MISSING_TOKEN:
			$code = 'token_missing';
			break;
		case self::TYPE_INVALID_USER:
			$code = 'invalid_user';
			break;
		}
		parent::__construct($code, __('Authentication error', 'wpsitesynccontent'));
	}
}

// EOF
