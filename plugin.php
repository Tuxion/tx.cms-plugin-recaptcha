<?php namespace plugins; if(!TX) die('No direct access.');
require_once("src/recaptchalib.php");

tx('Ob')->script('recaptcha_ajax');
  echo t.t.'<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>'.n;
tx('Ob')->end();