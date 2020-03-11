<?php
// Define routes //
	$routes = array(
		'/^(\/)?$/' => 'home.php', // "/"
		'/404/' => '404.php', // "/404"
		'/issues(\/)?(page\/[0-9]+)?(\/)?$/' => 'issues/list.php', // "/issues/page/PAGE_NUMBER"
		'/issue\/[0-9]+\/[a-zA-Z0-9_\-]+(\/)?$/' => 'issues/issue.php', // "/issue/ISSUE_NUMBER/ISSUE_TITLE/"
		'/read\/[a-zA-Z0-9_\-]+\/[0-9]+(\/)?$/' => 'issues/article.php', // "/issue/ISSUE_TITLE/ISSUE_ID/read/ARTICLE_TITLE/ARTICLE_ID"
		'/page\/[a-zA-Z0-9_\-]+\/[0-9]+(\/)?$/' => 'pages/page.php', // "/page/PAGE_NAME/PAGE_ID",
		'/login(\/)?/' => 'admin/login.php' // "/login"
	);