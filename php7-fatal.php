<?php
// The following class definiton won't work in PHP7, this file is used to test that our linter passes but post-commit checks raise a flag.

class MyTestClass {
	function MyTestClass() {
		echo "I'm not PHP7!";
	}
}
