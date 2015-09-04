<?php

// Bootstrap WordPress
$install_dir = realpath(dirname(__FILE__) . '/../../../wordpress') . '/';
chdir($install_dir);
include('wp-load.php');

if(!(is_user_logged_in() && current_user_can('manage_options'))) {
  wp_die('You must be logged in to view documentation.');
}

require_once dirname(__FILE__).'/lib/parsedown/Parsedown.php';
?>
<html>
<head>
  <title>Documentation</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <script type="text/javascript" src="/docs/lib/jquery/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="/docs/js/documentation.js"></script>
  <link type="text/css" href="/wp-content/themes/app/_/lib/foundation/css/foundation.css" rel="stylesheet">
  <link type="text/css" href="/docs/css/documentation.css" rel="stylesheet">
</head>
<body>
<div class="row"><div class="columns">
  <h1>Documentation</h1>
  <p>This documentation is parsed from Markdown files stored in <code>/wp-content/docs/md/</code>.</p>
  <div class="documentation">

<?php
$path_to_docs = dirname(__FILE__).'/md/';
if(!file_exists($path_to_docs)) {
  echo sprintf('Path does not exist: %s', $path_to_docs);
  exit;
}

// Find all Markdown files
$doc_files = array();
foreach(glob($path_to_docs.'*') as $file_name) {
  if(substr($file_name, -3) != '.md') continue;
  if(substr(basename($file_name), 0, 4) == 'HIDE') continue;
  $doc_files[] = $file_name;
}

if(count($doc_files) == 0) {
  exit;
}

// Parse docs into tabs and content
$tabs = array();
$contents = array();
foreach($doc_files as $key => $file) {
  // Get tab name from first line of file
  $file_array = array_filter(file($file));
  $tabs[] = preg_replace('/^#+\s+/', '', reset($file_array));
  
  $file_contents = file_get_contents($file);
  
  // Split file by ## (h2)
  $parts = preg_split('/\s(##\s+)/', $file_contents);
  $throwaway_first_part = array_shift($parts);
  $parts = array_map(function($el){
    return '## '.$el;
  }, $parts);
  
  $parsedown = new Parsedown();
  foreach($parts as $part) {
    preg_match('/^##.*/', $part, $matches);
    $part_title = preg_replace('/^##\s+/', '', reset($matches));
    $contents[$key][$part_title] = $parsedown->text($part);
  }
}

// Main tabs
$tabs_html = null;
foreach($tabs as $tab) {
  $tabs_html .= '<li>'.$tab.'</li>';
}
echo sprintf(
  '<div class="row"><div class="columns"><ul class="documentation-tabs">
    %s
  </ul></div></div>',
  $tabs_html
);

echo '<div class="documentation-files">';
foreach($contents as $file_number => $file_parts) {
  echo '<div class="row file">';
  
  // Table of contents
  $part_titles = null;
  foreach(array_keys($file_parts) as $title) {
    $part_titles .= '<li>'.$title.'</li>';
  }
  echo sprintf(
    '<div class="file-toc %s columns small-4 average-3">
      <ul>
        %s
      </ul>
    </div>',
    ((count($file_parts) == 1) ? 'hidden end' : ''),
    $part_titles
  );
  
  // Contents
  $content_parts = null;
  foreach($file_parts as $content) {
    $content_parts .= '<div class="part">'.$content.'</div>';
  }
  echo sprintf(
    '<div class="file-parts columns small-8 average-9">
      %s
    </div>',
    $content_parts
  );
  
  echo '</div>';
}
echo '</div>';

?>

</div></div>

  </div>
</body>
</html>
